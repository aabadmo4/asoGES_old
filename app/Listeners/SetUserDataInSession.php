<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SetUserDataInSession
{
    public function __construct()
    {
        //
    }

    public function handle($event)
    {
        $_SESSION["logged_user"] = $event->user["logged_user"];
        $_SESSION["logged_user_id"] = $event->user["logged_user_id"];
        $_SESSION["logged_user_rol_id"] = $event->user["logged_user_rol_id"];
        $_SESSION["logged"] = $event->user["logged"];
        $_SESSION["token"] = $event->user["token"]; 
    }
}
