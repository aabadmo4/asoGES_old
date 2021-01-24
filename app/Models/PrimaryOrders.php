<?php
namespace App\Models;
class PrimaryOrders
{
    public static function getOrders(){
        $json = file_get_contents("http://nubezar.corp/APIRest/_orders/?primary_order=getOrders");
        return json_decode($json, "false");
    }
    public static function getOrderById($id){
        $json = file_get_contents("http://nubezar.corp/APIRest/_Orders/?primary_order=getOrderById&id=" . $id);
        return json_decode($json, "false");
    }
}
