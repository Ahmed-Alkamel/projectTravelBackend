<?php

namespace App\Http\Resources;

use App\Models\TripBookingDetails;
use Illuminate\Http\Resources\Json\JsonResource;

class TripBookingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return ([
            'id' => $this->idBooking,
            'info' =>   TripAndBookingResource::collection($this->TripAndBookings),
            'planTrip' => $this->PlanTrips,
            'bookingTime' => $this->BookingTime,
            'infoBooking' => TripBookingDetailsResource::collection($this->TripBookingDetails)
        ]);
    }
}
