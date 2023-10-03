<?php

use App\Http\Resources\CustomerRequestsResource;
use App\Models\CustomerRequests;
use App\Models\NotificationDetails;
use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('public-CustomerRequst', function (CustomerRequests $customer, $id) {
    return true;
});


Broadcast::channel('event-received', function ($payload) {
    $identifier = $payload['identifier'];
    $data = NotificationDetails::find($identifier);
    $data->isRecive = true;

    // $connection->send('Received data!');
});
