<?php
namespace App\Models;
class Associations {
    public static function getById($id){
        $json = file_get_contents("http://nubezar.corp:8082/?resource=associations&associations=getById&id=$id");
        return json_decode($json, "false");  
    }
}
