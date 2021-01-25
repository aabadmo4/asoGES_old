<?php
namespace App\Models;
class Notifications {
    public static function countNotificationsNotRead() {
        $url = 'http://nubezar.corp/APIRest/_Notifications/?opcion=getNotificationsNotRead&user_id=1';
        $data = json_decode(file_get_contents($url), true);
        return $data;
    }

}
