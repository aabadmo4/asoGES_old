<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class profileController extends Controller
{
    public function miperfil()
    {
        session_start();
        return view("miperfil");
    }
    public function miperfil_config()
    {
        return env('ASOGES_URL');
    }
}
