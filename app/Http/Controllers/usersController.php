<?php
namespace App\Http\Controllers;
use App\Models;
class usersController extends Controller
{
    public function users() {
        session_start();
        if(authController::isAuthenticate()){
            $arreglo = Models\Partners::getPartners($_SESSION["token"]);
            if (array_key_exists("result", $arreglo)) {
                return view("login", compact("redirect"));
            } else {
                return view('users.users_list')->with('arreglo', $arreglo);
            }
        }else{
            return view("login", compact("redirect"));
        }
    }
    public function createPage() {
        session_start();
        return view('create_user')->with('data', "0");
    }
    public function createuser() {
        session_start();
        file_get_contents("http://nubezar.corp/APIRest/_Users/?opcion=createUser&username=".$_GET["txtusername"]."&password=".$_GET["txtpassword"]);
        sleep("3");
        return view('create_user')->with('data', "user created");
    }
}
