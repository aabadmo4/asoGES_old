<?php

namespace App\Http\Controllers;

use App\Models;

class sociosController extends Controller {

    public function index() {
        return view("welcome");
    }

    public function partners() {
        session_start();
        if (authController::isAuthenticate()) {
            $arreglo = Models\Partners::getPartners($_SESSION["token"]);
            if (array_key_exists("result", $arreglo)) {
                    return view("login", compact("redirect"));
            } else {
                
                    return view('partners.all')->with('arreglo', $arreglo);
            }
        } else {
            return view("login", compact("redirect"));
        }
    }

    public function createPartner() {
        session_start();
        if (authController::isAuthenticate()) {
            return view("createPartner");
        } else {
            return view("login", compact("redirect"));
        }
    }

    public function borrar_socio($id) {
        //return view("borrar_socio",compact("id"));
        return "borra user #" . $id;
    }

    public function info_socio($partner_id) {
        session_start();
        if (authController::isAuthenticate()) {
            $data = Models\Partners::getPartnerById($partner_id, $_SESSION["token"]);
            return view('partners.info')->with('data', $data);
        } else {
            $err = "error002";
            return view("welcome", compact("err"));
        }
    }


}
