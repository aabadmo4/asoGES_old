<?php

namespace App\Models;

class Sessions {

    public static function authUser($txtuser, $txtpassword) {
        /* $url = "http://nubezar.corp/APIRest/_Auth/?opcion=authUser&txtuser=$txtuser&txtpassword=$txtpassword&idsession=". session_id()."&user_ip=".$_SERVER["REMOTE_ADDR"];
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

          } */
        $url = "http://nubezar.corp:8081/?resource=sessions&action=insert&username=$txtuser&password=$txtpassword";
        $data = json_decode(file_get_contents($url), true);

        if ($data["result"] == "succesfully") {
            $data1 = array("logged_user" => "$txtuser",
                "logged_user_id" => $data["session"]["user_id"],
                "logged_user_rol_id" => 2,
                "token"=>$data["session"]["token"]);
            return $data1;
        } else {
            echo "credential error";
            exit();
        }
    }
    public static function destroyToken($token){
        $url = "http://nubezar.corp:8081/?resource=sessions&action=destroyToken&token=$token";
        file_get_contents($url);
    }
}
