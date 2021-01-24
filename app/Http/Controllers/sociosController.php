<?php
namespace App\Http\Controllers;
use App\Models;
class sociosController extends Controller {

    public function index() {
        return view("welcome");
    }

    public function partners() {
        session_start();
        if (isset($_SESSION["logged_user"]) & !empty($_SESSION["logged_user"])) {
            $arreglo=Models\Partners::getPartners();
            return view('partners')->with('arreglo', $arreglo);
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


    public function info_socio() {
        session_start();
        if (isset($_SESSION["logged_user"]) & !empty($_SESSION["logged_user"])) {
            $data=Models\Partners::getPartnerById($_GET["id"]);
            return view('info_socio')->with('data', $data);
        } else {
            $err = "error002";
            return view("welcome", compact("err"));
        }
    }


}
