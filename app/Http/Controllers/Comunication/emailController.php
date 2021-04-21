<?php

namespace App\Http\Controllers\Comunication;

use Illuminate\Http\Request;
use App\Models;

class emailController extends Controller
{
    private static $event_type_name;
    
    public static function send($event) {
        if($event["type"]=="loggin_notification"){
            if(!self::sendLoginNotification($event["user_data"])){
                die("Ha ocurrido un error al enviar el email.");
            }
        }else if($event["type"]=="reset_password_new_token"){
            if(!self::sendTokenResetPassword($event["user_data"])){
                die("Ha ocurrido un error al enviar el email.");
            }
        }
    }
    private static function sendLoginNotification($user_data){
        self::$event_type_name="Nuevo inicio de sesión.";
    }
    private static function sendTokenResetPassword($user_data){
        self::$event_type_name="Configuración de nueva contraseña.";
    }
}
