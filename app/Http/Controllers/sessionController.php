<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        session_start();
        $_SESSION["logged_user"] = $_GET["txtuser"];
        $_SESSION["logged_user_id"] = 1;
        $_COOKIE["session"] = true;
        file_get_contents('https://nubezar.es/connect/not', true);

        
        $url = 'http://nubezar.corp/APIRest/?opcion=addSession&user_id=' . $_SESSION["logged_user_id"] . '&user_ip=' . $_SERVER['REMOTE_ADDR'] . '&idsession=' . session_id();
        $data = json_decode(file_get_contents($url), true);
        if (empty($data['id'])) {
            echo "err notread";
            exit();
        } else {
            $logged = 1;
            return view("logado");
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        session_start();
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
