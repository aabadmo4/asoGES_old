<?php
namespace App\Models;
class Email{
    protected static $url="https://asoges.es/mail/";
    public static function send($event_type_name,$body){
         try{
            file_get_contents(self::$url."/event=".$event_type_name);
            return true;
         } catch (Exception $ex) {
             return false;
         }
    }
}
