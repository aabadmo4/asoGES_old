<?php
namespace App\Http\Controllers;
use App\Models;
class chartersController extends Controller {
    public function charters() {
        session_start();
        if (isset($_SESSION["logged_user"]) & !empty($_SESSION["logged_user"])) {
            $charters=Models\Charters::getCharters();
            if (empty($charters[1]['id'])) {
                echo "Err recuperar json";
                return view('error');
            }
            return view('charters')->with('charters', $charters);
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
