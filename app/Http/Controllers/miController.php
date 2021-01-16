<?php
namespace App\Http\Controllers;

class miController extends Controller {

    public function index() {
        return view("welcome");
    }

    public function charters() {
        session_start();
        if (isset($_SESSION["logged_user"]) & !empty($_SESSION["logged_user"])) {
            $charters = ["Junta General Ordiniaria", "Junta General extraordinaria", "Junta General Extraordinaria", "Balence de Cuentas"];
            return view("charters", compact("charters"));
        } else {
            $err = "error002";
            return view("welcome", compact("err"));
        }
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
        if (isset($_SESSION["logged_user"]) & !empty($_SESSION["logged_user"])) {
            return view("noticias");
        } else {
            $err = "error002";
            return view("welcome", compact("err"));
        }
    }
}
