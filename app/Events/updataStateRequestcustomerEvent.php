<?php

namespace App\Events;

use App\Http\Resources\CustomerRequestsResource;
use App\Models\CustomerRequests;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class updataStateRequestcustomerEvent implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */

    public  $CustomerRequest;
    public $idCutomer;
    public function __construct($idCutomer)
    {
        $this->CustomerRequest = CustomerRequestsResource::collection(CustomerRequests::where('idCus', $idCutomer)->get());
        $this->idCutomer = $idCutomer;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('public-updataRequestCustomer');
    }
    public function broadcastWith()
    {
        return [
            'id' => $this->idCutomer,
            'info' => $this->CustomerRequest
        ];
    }
}
