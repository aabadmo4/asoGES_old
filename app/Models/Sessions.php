<?php

namespace App\Models;

use App\Http\Controllers;
class Sessions {

    public static function authUser($txtuser, $txtpassword) {
        $url = "http://nubezar.corp:8081/?resource=sessions&action=insert&username=$txtuser&password=$txtpassword&ip=" . Controllers\ToolsController::getUserIp();
        $data = json_decode(file_get_contents($url), true);

        if ($data["result"] == "succesfully") {
            if ($data["session"]["user_status"] == "1") {
                return array("logged_user" => "$txtuser",
                    "logged_user_id" => $data["session"]["user_id"],
                    "logged_user_rol_id" => 2,
                    "token" => $data["session"]["token"]);  
            } else {
                echo "User status not valid.";
                exit();
            }
        } else {
            echo "credential error";
            exit();
        }
    }

    public static function destroyToken($token) {
        $url = "http://nubezar.corp:8081/?resource=sessions&action=destroyToken&token=$token";
        $data = json_decode(file_get_contents($url), true);
        if ($data["result"] == "succesfully") {
            return true;
        } else {
            return false;
        }
    }

    public static function validateToken($token) {
        $url = "http://nubezar.corp:8081/?resource=sessions&action=validateToken&token=$token";
        $data = json_decode(file_get_contents($url), true);
        if ($data["result"] == "succesfully") {
            return true;
        } else {
            return false;
        }
    }

}
