<?php
namespace App\Models;
class Partners{
    public static function getPartners($token){
        $json = file_get_contents("http://nubezar.corp:8083/?resource=partners&action=getAll&token=$token");
        return json_decode($json, "false");  
    }
    public static function getPartnerById($id,$token){
        $data = json_decode(file_get_contents('http://nubezar.corp:8083/?resource=partners&action=getBy&by=id&value='.$id."&token=$token"), true);
        if (empty($data['id'])) {
            echo "El id solicitado no corresponde a ningun usuario";
            exit();
        }
        return $data;
    }
}
