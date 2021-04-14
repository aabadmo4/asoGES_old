<?php

namespace App\Models;

class Base {
    public $port;
    public $resource;
    public $action;
    function __construct($resource) {
        $this->url="http://nubezar.corp:/APIRest/_$resource/?opcion=";   
    }
    public static function getAll() {
        $json = file_get_contents($this->url."get".$this->resource);
        if($json==false){
            echo "Error al conectar con el servicio de ".self::$resource.".";
        }
        return json_decode($json, "false");
    }
}
