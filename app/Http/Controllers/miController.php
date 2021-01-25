<?php
namespace App\Http\Controllers;

class miController extends Controller {

    public function index() {
        session_start();
        return view("welcome");
    }

    

    public function info_socio($id) {
        session_start();
        if (isset($_SESSION["logged_user"]) & !empty($_SESSION["logged_user"])) {
            return view("info_socio");
        } else {
            $err = "error002";
            return view("welcome", compact("err"));
        }
    }

    public function buscar() {
        session_start();
        return view("buscar");
    }

    public function contactar() {
        session_start();
        if (isset($_SESSION["logged_user"]) & !empty($_SESSION["logged_user"])) {
            return view("contacta");
        } else {
            $err = "error002";
            return view("welcome", compact("err"));
        }
    }
    public function noticias() {
        session_start();
        return view("noticias");
    }
}
