<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class primaryOrdersController extends Controller
{
    public function getOrders() {
        session_start();
        return view("primary_orders");
    }
}
