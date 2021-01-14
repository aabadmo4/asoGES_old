<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class profileController extends Controller
{
    public function miperfil()
    {
        return "miperfil";
    }
    public function miperfil_config()
    {
        return env('ASOGES_URL');
    }
}
