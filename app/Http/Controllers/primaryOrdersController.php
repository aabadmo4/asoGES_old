<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class primaryOrdersController extends Controller {

    public function getOrders() {
        session_start();
        $json = file_get_contents("http://nubezar.corp/APIRest/_orders/?primary_order=getOrders");
        $arreglo = json_decode($json, "false");
        return view('primary_orders')->with('arreglo', $arreglo);
    }

    public function getOrderInfoById(Request $id) {
        session_start();
        $json = file_get_contents("http://nubezar.corp/APIRest/_Orders/?primary_order=getOrderById&id=" . $_GET["id"]);
        $data = json_decode($json, "false");
        return view('primary_orders_info')->with('data', $data);
    }

}
