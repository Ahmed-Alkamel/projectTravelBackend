<?php

namespace App\Listeners;

use App\Events\RequestCustomerControllEvent;
use App\Http\Resources\CustomerRequestsResource;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class RequestCustomerListener
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

    // /**
    //  * Handle the event.
    //  *
    //  * @param  \App\Events\RequestCustomerControllEvent  $event
    //  * @return void
    //  */
    public function handle(RequestCustomerControllEvent $event)
    {
    }
}
