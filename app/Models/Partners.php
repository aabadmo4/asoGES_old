<?php
namespace App\Models;
class Partners{
    public static function getPartners()
    {
        $json = file_get_contents("http://nubezar.corp/APIRest/_Partners/?opcion=getPartners");
        return json_decode($json, "false");
    }
    public static function getPartnerById($id){
        $data = json_decode(file_get_contents('http://nubezar.corp/APIRest/_Partners?opcion=getPartner&id='.$id), true);
        if (empty($data['id'])) {
            echo "El id solicitado no corresponde a ningun usuario";
            exit();
        }
        return $data;
    }
}
