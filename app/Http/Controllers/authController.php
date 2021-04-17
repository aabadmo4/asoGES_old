<?php

namespace App\Http\Controllers;

use App\Models;

class authController extends Controller {

    public static function isAuthenticate() {
        if (isset($_SESSION["logged_user"]) & !empty($_SESSION["logged_user"])) {
            if (Models\Sessions::validateToken($_SESSION["token"])) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

}
