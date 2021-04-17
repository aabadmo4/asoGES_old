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
    public function setStatus($user_id,$new_status) {
        //http://nubezar.corp:8081/?resource=users&action=updateStatus&id=12&new_status=3
        session_start();
        if(authController::isAuthenticate()){
            if (Models\Users::setStatus($user_id,$new_status)) {
                return back();
            } else {
                return view("login", compact("redirect"));
            }
        }else{
            return view("login", compact("redirect"));
        }
    }
}
