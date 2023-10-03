<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ServicesBookingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "idServicesBooking" => $this->idServicesBooking,
            "idCustomerRequsts" => $this->idCustomerRequsts,
            "bookingServicesDate" => $this->bookingServicesDate,
            "dateEndDurtion" => $this->dateEndDurtion,
            'infoBookingService' => ServicesBookingDetailsResource::collection($this->ServicesBookinngDetails)

        ];
    }
}
