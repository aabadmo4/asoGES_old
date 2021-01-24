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
        Models\Sessions::authUser($_GET["txtuser"]);
        return view("logado");
    }

    public function logout() {
        session_start();
        session_destroy();
        //session_start();
        return view("welcome");
    }


    private function getUserIp() {
        $ipaddress = '';
        if ($_SERVER['HTTP_CLIENT_IP'])
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if ($_SERVER['HTTP_X_FORWARDED_FOR'])
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if ($_SERVER['HTTP_X_FORWARDED'])
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if ($_SERVER['HTTP_FORWARDED_FOR'])
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if ($_SERVER['HTTP_FORWARDED'])
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if ($_SERVER['REMOTE_ADDR'])
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';

        return $ipaddress;
    }

}
