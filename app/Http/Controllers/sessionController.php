<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller {
    public function logIn(){
      start_session();
      $_SESSION["logged_user"]="adanabad";
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
