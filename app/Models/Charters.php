<?php

namespace App\Models;

class Charters {

    public static function getCharters() {
        $url = 'http://nubezar.corp/APIRest/_Charters/?opcion=getAllCharters';
        return json_decode(file_get_contents($url), true);
    }

    public static function countCharters() {
        $url_charters = 'http://nubezar.corp/APIRest/_Charters/?opcion=countCharters';
        $data_charters = json_decode(file_get_contents($url_charters), true);
        if (empty($data_charters['charters'])) {
            $data_charters['charters'] = "err";
        }
        return $data_charters;
    }

}
