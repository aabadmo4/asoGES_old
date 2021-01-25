<?php
namespace App\Models;

class Sessions{
    /*public static function authUser($txtuser){
        session_start();
        $_SESSION["logged_user"] = $txtuser;
        $_SESSION["logged_user_id"] = 1;
        $_COOKIE["session"] = true;
        $url = 'http://nubezar.corp/APIRest/?opcion=addSession&user_id=' . $_SESSION["logged_user_id"] . '&user_ip=' . $_SERVER['REMOTE_ADDR'] . '&idsession=' . session_id();
        $data = json_decode(file_get_contents($url), true);
        if($data==false){
            echo "ERROR AL CONECTAR CON SERVICIO AUTH";
            exit();
        }else{
            return $data;
        }
    }*/
}
