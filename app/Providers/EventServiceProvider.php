<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        \App\Events\UserLogged::class =>[
                                            \App\Listeners\Login\SetUserDataInSession::class,
                                            \App\Listeners\Notifications\EmailDispatcher::class
                                        ],
        \App\Events\UserLogout::class => [
                                            \App\Listeners\Logout\DeleteSession::class
                                         ],
        \App\Events\ResetPwdNewToken::class => [
                                                   \App\Listeners\Notifications\EmailDispatcher::class
                                               ]
        
        ];
    

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
