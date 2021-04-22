<?php

namespace App\Http\Controllers\Comunication;

use Illuminate\Http\Request;
use App\Models;

class emailController extends \App\Http\Controllers\Controller {

    private static $event_type;
    private static $event_type_name;
    private static $comunication_provider="email";

    public static function send($event) {
        if (self::VerifyAndCallEventType($event)) {
           Log::debug("New comunication.", ["event_type"=>self::$event_type,
                                            "comunication_provider"=>self::$comunication_provider,
                                            "user_id"=>$event->user["logged_user_id"],
                                            "username"=>$event->user["username"],
                                            "user_rol_id"=>$event->user["logged_user_rol_id"],
                                            "association_id"=>$event->user["logged_user_association_id"]]);
        }
    }

    private static function loggin_notification($event) {
        if(file_get_contents('https://asoges.es/mail/sendemaillogin.php?user='.$event->user["logged_user"])){
            return true;
        }
    }

    private static function reset_password_new_token($event) {
        if(file_get_contents("https://asoges.es/mail/sendtoken.php?user=".$event->user["username"]."&token=" . $event->pwd_token)){
            return true;
        }
    }

    private static function VerifyAndCallEventType($event) {
        if ($event->event_type == "loggin_notification") {
            self::$event_type = "loggin_notification";
            self::$event_type_name = "Nuevo inicio de sesión.";
            if(self::loggin_notification($event)){
                return true;
            }else{
                return false;
            }
        } else if ($event->event_type == "reset_password_new_token") {
            self::$event_type = "reset_password_new_token";
            self::$event_type_name = "Configuración de nueva contraseña.";
            if(self::reset_password_new_token($event)){
                return true;
            }else{
                return false;
            }
        } else {
            return false;
        }
    }

}
