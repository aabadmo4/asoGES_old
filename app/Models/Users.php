<?php
namespace App\Models;
class Users{
    public static function getAll($token){
        $json = file_get_contents("http://nubezar.corp:8081/?resource=users&action=getAll&token=$token");
        return json_decode($json, "false");  
    }
    public static function setStatus($user_id,$new_status) {
        $json = file_get_contents("http://nubezar.corp:8081/?resource=users&action=updateStatus&id=$user_id&new_status=$new_status");
        $data= json_decode($json, "false");
        if(isset($data["result"])){
            if($data["result"]=="succesfully"){
                return true;
            }else if($data["result"]=="failed"){
                return false;
            }
        }else{
            return false;
        }
    }
}
