<?php
namespace App\Models;
class Charters{
    public static function getCharters()
    {
        $url = 'http://nubezar.corp/APIRest/_Charters/?opcion=getAllCharters';
         return json_decode(file_get_contents($url), true);
    }

}
