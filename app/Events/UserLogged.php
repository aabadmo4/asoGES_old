<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class UserLogged
{   
    use Dispatchable, InteractsWithSockets, SerializesModels;
    
    public $user;
    public $event_type;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user=array("logged_user"=>$user["logged_user"],
                          "username"=>$user["logged_user"],
                          "logged_user_association_id"=>$user["association_id"],
                          "logged_user_id"=>$user["logged_user_id"],
                           "logged_user_rol_id"=>$user["logged_user_rol_id"],
                           "logged"=>true,
                           "token"=>$user["token"],
                           "association_id"=>$user["association_id"]);
        $this->event_type="loggin_notification";
        Log::debug("Se ha iniciado sesión.", ["username" => $user["logged_user"],
                                              "user_id"=> $user["logged_user_id"],
                                              "association_id"=>$user["association_id"],
                                              "user_rol_id"=> $user["logged_user_rol_id"],
                                              "session_token"=> $user["token"]]);
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
