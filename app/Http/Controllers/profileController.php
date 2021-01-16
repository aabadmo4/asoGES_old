<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class profileController extends Controller
{
    public function profile()
    {
        session_start();
        if(isset($_SESSION["logged_user"])){
            echo '<script>alert("No tiene permisos asignados para !");</script>';
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
    public function resetPasssword()
    {
        return view("welcome");
    }
}
