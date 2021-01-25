<?php
namespace App\Models;
class Notifications {
    public static function countNotificationsNotRead() {
        $url = 'http://nubezar.corp/APIRest/_Notifications/?opcion=getNotificationsNotRead&user_id='.$_SESSION["logged_user_id"];
        $data = json_decode(file_get_contents($url), true);
        return $data;
    }

}
