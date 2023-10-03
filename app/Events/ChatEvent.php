<?php

namespace App\Events;

use App\Models\ChatContaint;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ChatEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public ChatContaint $message;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(ChatContaint $message)
    {
        $this->message = $message;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('public-Chat');
    }
    // public function brodcastAs()
    // {
    //     # code...
    // }
    public function broadcastWith()
    {
        return  [
            'id' => $this->message->idChat,
            'info' => $this->message
        ];
    }
}
