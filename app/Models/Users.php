<?php
namespace App\Models;
class Users{
    public static function getAll($token){
        $json = file_get_contents("http://nubezar.corp:8081/?resource=users&action=getAll&token=$token");
        return json_decode($json, "false");  
    }
}
