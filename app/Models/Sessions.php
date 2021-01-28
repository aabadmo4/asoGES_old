<?php
namespace App\Models;

class Sessions{
    public static function authUser($txtuser,$txtpassword){
        $url = "http://nubezar.corp/APIRest/_Auth/?opcion=authUser&txtuser=$txtuser&txtpassword=$txtpassword&idsession=". session_id()."&user_ip=".$_SERVER["REMOTE_ADDR"];
        $data = json_decode(file_get_contents($url), true);
        if($data==false){
            echo "ERROR AL CONECTAR CON SERVICIO AUTH";
            exit();
        }else{
            if($data["authenticate_status"]=="ok"){
                return $data;
            }else{
                echo "credential error";
                exit();
            }
            
        }
    }
}
