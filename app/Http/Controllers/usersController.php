<?php
namespace App\Http\Controllers;
use App\Models;
class usersController extends Controller
{
    public function users() {
        session_start();
        $arreglo= Models\Users::getAll();
        return view('users')->with('data', $arreglo);
        
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
