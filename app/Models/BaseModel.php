<?php
namespace App\Models;
class BaseModel {
    public $resource;
    public static function getAll(){
        $json = file_get_contents("http://nubezar.corp/APIRest/_".$resource."/?opcion=get".$this->resource);
        return json_decode($json, "false");
    }
}
