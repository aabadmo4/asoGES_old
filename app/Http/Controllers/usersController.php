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
}
