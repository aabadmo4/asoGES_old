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

class ResetPwdNewToken
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $event_type="reset_password_new_token";
    public $pwd_token;
    public $user;
    public $username;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($username,$pwd_token)
    {
        $this->pwd_token=$pwd_token;
        $this->username=$username;
        $this->user=array("logged_user_id"=>"-",
                          "username"=>$username,
                          "logged_user_rol_id"=>"-",
                          "logged_user_association_id"=>"-");
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
