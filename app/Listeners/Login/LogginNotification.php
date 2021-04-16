<?php

namespace App\Listeners\Login;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LogginNotification
{
    public function __construct()
    {
        //
    }

    public function handle($event)
    {
        file_get_contents('http://nubezar.corp/asogesAPI/sendemaillogin?user='.$event->user["logged_user"]);
    }
}
