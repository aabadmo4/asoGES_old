<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class chartersController extends Controller
{
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
    public function createCharter() {
        session_start();
        return view("createCharter");
    }
}
