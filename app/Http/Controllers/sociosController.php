<?php

namespace App\Http\Controllers;

class sociosController extends Controller {

    public function index() {
        return view("welcome");
    }

    public function partners() {
        session_start();
        if (isset($_SESSION["logged_user"]) & !empty($_SESSION["logged_user"])) {
            return view("socios");
        } else {
            return view("login", compact("redirect"));
        }
    }

    public function createPartner() {
        session_start();
        return view("createPartner");
    }

    public function borrar_socio($id) {
        //return view("borrar_socio",compact("id"));
        return "borra user #" . $id;
    }

    public function actas() {
        session_start();
        if (isset($_SESSION["logged_user"]) & !empty($_SESSION["logged_user"])) {
            $actas = ["Junta General Ordiniaria", "Junta General extraordinaria", "Junta General Extraordinaria", "Balence de Cuentas"];
            return view("actas", compact("actas"));
        } else {
            $err = "error001";
            return view("welcome", compact("err"));
        }
    }

    public function info_socio() {
        session_start();
        if (isset($_SESSION["logged_user"]) & !empty($_SESSION["logged_user"])) {
            return view("info_socio");
        } else {
            $err = "error002";
            return view("welcome", compact("err"));
        }
    }

    public function buscar() {
        return view("buscar");
    }

    public function contactar() {
        session_start();
        if (isset($_SESSION["logged_user"]) & !empty($_SESSION["logged_user"])) {
            return view("contacta");
        } else {
            $err = "error001";
            return view("welcome", compact("err"));
        }
    }

    public function noticias() {
        session_start();
        if (isset($_SESSION["logged_user"]) & !empty($_SESSION["logged_user"])) {
            return view("noticias");
        } else {
            $err = "error001";
            return view("welcome", compact("err"));
        }
    }

}
