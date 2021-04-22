<?php

namespace App\Listeners\Logout;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class DeleteSession
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle()
    {
        Log::debug("Se ha cerrado sesión.", ["username" => $_SESSION["logged_user"],
                                              "user_id"=> $_SESSION["logged_user_id"],
                                              "association_id"=>$_SESSION["logged_user_association_id"],
                                              "user_rol_id"=> $_SESSION["logged_user_rol_id"],
                                              "session_token"=> $_SESSION["token"]]);
        session_destroy();
        session_start();
        session()->regenerate();
        session(['logged' => false]);
        $_SESSION["logged"]=false;
    }
}
