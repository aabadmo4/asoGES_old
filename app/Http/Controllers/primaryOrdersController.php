<?php

namespace App\Http\Controllers;

use App\Models;
use Illuminate\Http\Request;

class primaryOrdersController extends Controller {

    public function getOrders() {
        session_start();
        $arreglo=Models\PrimaryOrders::getOrders();
        return view('primary_orders')->with('arreglo', $arreglo);
    }

    public function getOrderInfoById(Request $id) {
        session_start();
        $data=Models\PrimaryOrders::getOrderById($_GET["id"]);
        return view('primary_orders_info')->with('data', $data);
    }

}
