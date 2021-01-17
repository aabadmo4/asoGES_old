<?php

namespace App\Http\Controllers;

class documentsController extends Controller
{
    public function pdf_viewer() {
        session_start();
        return view("pdf_viewer");
    }
}
