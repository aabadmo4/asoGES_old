<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class miController extends Controller
{
    public function index()
    {
        return view("welcome");
    }
    public function socios()
    {
        return view("socios");
    }
    public function create_socio()
    {
        return view("crear_socio");
    }
    public function borrar_socio($id)
    {
        //return view("borrar_socio",compact("id"));
        return "borra user #".$id;
    }
    public function actas()
    {
        $actas=["Junta General Ordiniaria", "Junta General extraordinaria", "Junta General Extraordinaria", "Balence de Cuentas"];
        return view("actas",compact("actas"));
    }
    public function info_socio($id)
    {
        return view("info_socio");
    }
    public function buscar($termino)
    {
        return view("buscar",compact("termino"));
    }
    public function contactar()
    {
        return view("contacta");
    }
    public function logout()
    {
        session_start();
        if(isset($_SESSION["logged_user"])&!empty($_SESSION["logged_user"])){
           session_destroy();
            return view("welcome"); 
        }else{
            $err="error001";
            return view("welcome",compact("err"));
        }
        
    }
}
