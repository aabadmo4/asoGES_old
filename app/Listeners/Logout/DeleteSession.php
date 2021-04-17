<?php

namespace App\Listeners\Logout;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

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
        session_destroy();
        session_start();
        session()->regenerate();
        session(['logged' => false]);
        $_SESSION["logged"]=false;
    }
}
