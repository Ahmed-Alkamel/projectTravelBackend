<?php

namespace App\Events;

use App\Http\Resources\CustomerRequestsResource;
use App\Models\CustomerRequests;
use App\Models\Customers;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

/**
 * Summary of RequestCustomerControllEvent
 */
class RequestCustomerControllEvent implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $customer;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct()

    {
        $this->customer = CustomerRequestsResource::collection(CustomerRequests::all());
        // $this->customerRequest = $customerRequests;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('public-CustomerRequst');
        // return new PrivateChannel('channel-name');
    }


    public function broadcastWith()
    {
        return ['info' => $this->customer];
    }
}
