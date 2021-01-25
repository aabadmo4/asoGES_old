<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models;

class sessionController extends Controller {
    public function loginPage() {
        session_start();
        if (isset($_SESSION["logged_user"])) {
            return view("welcome");
        } else {
            return view("login");
        }
    }

    public function logado() { 
        
        return view("logado");
    }

    public function logout() {
        session_start();
        session_destroy();
        //session_start();
        return view("welcome");
    }
}
