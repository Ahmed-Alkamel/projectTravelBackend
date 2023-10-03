<?php

namespace App\Events;

use App\Http\Resources\NotificationDeatialsResource;
use App\Models\NotificationDetails;
use Exception;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Ratchet\ConnectionInterface;

class NotificationEvent implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public   NotificationDetails $data;
    public function __construct(NotificationDetails $data)
    {
        $this->data = $data;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('public-Notiification');
    }
    // public function onMessage(ConnectionInterface $connection, $payload)
    // {
    //     try {
    //         $identifier = $payload['identifier'];
    //         $data = NotificationDetails::find($identifier);
    //         $data->isRecive = true;

    //         $connection->send('Received data!');
    //     } catch (Exception $ex) {
    //     }

    // Send a confirmation message back to the client

    // }
    public function broadcastWith()
    {
        return [
            'id' => $this->data->idCus,
            'info' => NotificationDeatialsResource::make($this->data)

        ];
    }
}
