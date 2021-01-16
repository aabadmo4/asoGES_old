<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller {

    public function loginPage() {
        session_start();
        return view("login");
    }

    public function logado() {
        session_start();
        $_SESSION["logged_user"] = $_GET["txtuser"];
        $_SESSION["logged_user_id"] = 1;
        $_COOKIE["session"] = true;
        return view("logado");
    }

    public function logout() {
        session_start();
        if (isset($_SESSION["logged_user"]) & !empty($_SESSION["logged_user"])) {
            session_destroy();
            return view("welcome");
        } else {
            $err = "error001";
            return view("welcome", compact("err"));
        }
    }

}
