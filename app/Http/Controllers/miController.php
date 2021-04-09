<?php
namespace App\Http\Controllers;

class miController extends Controller {

    public function index() {
        session_start();
        if(!isset($_SESSION["logged"])or($_SESSION["logged"]==false)){
            $_SESSION["logged"]=false;
        }
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
}
