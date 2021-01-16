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

        $url = 'http://nubezar.corp/APIRest/?opcion=addSession&user_id='.$_SESSION["logged_user_id"].'&idsession='. session_id();
        $data = json_decode(file_get_contents($url), true);
        if (empty($data['id'])) {
            echo "err notread";
            exit();
        }else{
            return view("logado");
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        return view("welcome");
    }
}
