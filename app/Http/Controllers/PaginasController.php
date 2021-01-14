<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function inicio(){
        return view('welcome');
    }
    public function socios(){
        return view('socios');
    }
    public function noticias(){
        return view('noticias');
    }
    public function actas(){
        return view('actas');
    }
    public function contacto(){
        return view('contacto');
    }
}
