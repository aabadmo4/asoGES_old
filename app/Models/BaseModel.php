<?php
namespace App\Models;
class BaseModel {
    public static $resource="Users";
    
    public static function getAll() {
        $json = file_get_contents("http://nubezar.corp/APIRest/_".self::$resource."/?opcion=get".self::$resource);
        if($json==false){
            echo "Error al conectar con el servicio de Ususarios.";
        }
        return json_decode($json, "false");
    }
}