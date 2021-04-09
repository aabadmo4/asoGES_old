<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;

class sessionController extends Controller {

    public function loginPage() {
        session_start();
        return view("login");
    }

    public function logado() {
        session_start();
        $user_id = Models\Sessions::authUser($_GET["txtuser"], $_GET["txtpassword"]);
        $_SESSION["logged_user"] = $_GET["txtuser"];
        $_SESSION["logged_user_id"] = $user_id["logged_user_id"];
        $_SESSION["logged_user_rol_id"] = $user_id["logged_user_rol_id"];
        $_SESSION["logged"] = true;
        $_SESSION["token"] = $user_id["token"];
        return view("logado");
    }

    public function logout() {
        session_start();
        if (!isset($_SESSION["logged_user"])) {
            echo "no puede cerrarvsesion sin iniciar antes";
        }
        Models\Sessions::destroyToken($_SESSION["token"]);
        session_destroy();
        session_start();
        $_SESSION["logged"] = false;
        return view("welcome");
    }

}
