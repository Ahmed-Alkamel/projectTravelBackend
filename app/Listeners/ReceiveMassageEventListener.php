<?php

namespace App\Listeners;

use App\Events\ReceiveMassageEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ReceiveMassageEventListener
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
     * @param  \App\Events\ReceiveMassageEvent  $event
     * @return void
     */
    public function handle(ReceiveMassageEvent $event)
    {
        // $payload = json_decode($event->message, true);
        // $message = $payload['message'];

        // // Handle the incoming message
        // echo "Received message: $message\n";

        // // Send a response back to the client
        // $connection = $event->connection;
        // $response = [
        //     'status' => 'ok',
        //     'message' => "Received message: $message"
        // ];
        // $connection->send(json_encode($response));
    }
}
