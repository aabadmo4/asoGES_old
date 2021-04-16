<?php

namespace App\Http\Controllers;
use App\Models;
use Illuminate\Http\Request;

class usersController extends Controller
{
    public function users(){
        session_start();
        if(authController::isAuthenticate()){
            $arreglo = Models\Users::getAll($_SESSION["token"]);
            if (array_key_exists("result", $arreglo)) {
                return view("login", compact("redirect"));
            } else {
                return view('users.users_list')->with('arreglo', $arreglo);
            }
        }else{
            return view("login", compact("redirect"));
        }
    }
}
