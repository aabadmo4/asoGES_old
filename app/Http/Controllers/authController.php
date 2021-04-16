<?php

namespace App\Http\Controllers;

class authController extends Controller{

    public static function isAuthenticate() {
        if (isset($_SESSION["logged_user"]) & !empty($_SESSION["logged_user"])) {
            return true;
        }else{
            return false;
        }
    }

}
