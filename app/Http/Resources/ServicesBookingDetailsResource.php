<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ServicesBookingDetailsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            "idServiceBookDetails" => $this->idServiceBookDetails,
            "idServicesBooking" => $this->idServicesBooking,
            'person' => IdentityCustomersResource::make($this->IdentityCustomers),
            'dataInputRequrment' => RequermentCustommerServicesBookinngResource::collection($this->RequermentCustommerServicesBookinng)
        ];
    }
}
