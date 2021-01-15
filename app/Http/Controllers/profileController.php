<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class profileController extends Controller
{
    public function miperfil()
    {
        session_start();
        if(isset($_SESSION["logged_user"])){
            return view("miperfil");
        }else{
            $err = "error002";
            return view("welcome", compact("err"));
        }
    }
    public function miperfil_config()
    {
        return view("welcome");
    }
}
