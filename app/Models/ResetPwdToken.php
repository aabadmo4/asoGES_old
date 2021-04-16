<?php

namespace App\Models;

use App\Http\Controllers;

class ResetPwdToken {

    public static function newToken($user_id) {
        //$url = "http://nubezar.corp:8081/?resource=users&action=passwordResetToken&user_id=$user_id&ip" . Controllers\ToolsController::getUserIp();
        $url = "http://nubezar.corp:8081/?resource=users&action=passwordResetToken&user_id=$user_id&ip=1";
        $data = json_decode(file_get_contents($url), true);
        if ($data["result"] == "succesfully") {
            return $data["password_reset_token"]["token"];
        } else {
            return false;
        }
    }
    public static function updatePassword($user_id,$newpass,$pwd_token){
        $url = "http://nubezar.corp:8081/?resource=users&action=updatePassword&user_id=$user_id&password=$newpass&pwd_token=$pwd_token";
        $data = json_decode(file_get_contents($url), true);
        if($data["result"]=="succesfully"){
            return true;
        }else{
            return false;
        }
    }

}
