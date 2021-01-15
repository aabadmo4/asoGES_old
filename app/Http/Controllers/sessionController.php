<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller {

    public function loginPage() {
        session_start();
        if (!isset($_SESSION["logged_user"]) or empty($_SESSION["logged_user"])) {
            session_destroy();
            return view("login");
        } else {
            $err = "error001";
            return view("welcome", compact("err"));
        }
    }
    public function login() {
        session_start();
        if(!empty($_GET["txtuser"])){
            if($_GET["txtpassword"]=="patata"){
                $_SESSION["logged_user"]="adanabad";    
                return view("logado");
            }else{
                echo "login false0";
            }
        }else{
            echo "login false0";
        }
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
