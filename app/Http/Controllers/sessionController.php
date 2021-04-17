<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use App\Mail;
use App\Events\UserLogged;

class sessionController extends Controller {

    public function loginPage() {
        session_start();
        return view("login");
    }

    public function logado() {
        session_start();
        if ($user_id = Models\Sessions::authUser($_GET["txtuser"], $_GET["txtpassword"])) {

            $user_logged = array("logged_user" => $_GET["txtuser"],
                "logged_user_id" => $user_id["logged_user_id"],
                "logged_user_rol_id" => $user_id["logged_user_rol_id"],
                "logged" => true,
                "token" => $user_id["token"]);
            event(new UserLogged($user_logged));

            return view("welcome");
        } else {
            die("error");
        }
    }
    public function logado_test() {
        session_start();
        if ($user_id = Models\Sessions::authUser($_POST["txtuser"], $_POST["txtpassword"])) {

            $user_logged = array("logged_user" => $_POST["txtuser"],
                "logged_user_id" => $user_id["logged_user_id"],
                "logged_user_rol_id" => $user_id["logged_user_rol_id"],
                "logged" => true,
                "token" => $user_id["token"]);
            event(new UserLogged($user_logged));

            //return view("welcome");
            return redirect('/wellcome');
        } else {
            die("error");
        }
    }

    public function logout() {
        session_start();
        if (!authController::isAuthenticate()) {
            echo "no puede cerrar sesion sin iniciar antes";
            return view("login");
        }
        if (Models\Sessions::destroyToken($_SESSION["token"])) {
            event(new \App\Events\UserLogout());
            return view("welcome");
        } else {
            die("Error al destruir el token, su estado ya era false.");
        }
    }
    
    public function validateToken($token) {
        Models\Sessions::validateToken($token);
    }

}
