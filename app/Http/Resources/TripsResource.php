<?php

namespace App\Http\Resources;

use App\Models\CategoriesServicesMain;
use App\Models\Services;
use Illuminate\Http\Resources\Json\JsonResource;

class TripsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $data = Services::find($this->idServ);
        $data = CategoriesServicesMain::find($data->idCategoryMain);
        return ([
            "idTrips" => $this->idTrips,
            "company" => CompaniesResource::make($this->Companies),
            // "idCompanTrip" => $this->idCompanTrip,
            'idService' => $this->idServ,
            'category' => CategoriesServicesResource::make($data),
            // "service"=>ServicesResource::make($this->Services),
            'level' => $this->level,
            'price' => $this->price,
            'timeLeave' => $this->timeLeave,
            // 'scheduler' => $this->SchedulerTrip,
            'scheduler' => SchedulerTripResource::make($this->SchedulerTrip,),
            // 'availableSeats'=>$this->availableSeats,
            // 'startingDate'=>$this->startingDate,
            // 'ltinerary'=>$this->ltinerary,
            "fromCity" => CitiesResource::make($this->FromCity),
            "toCity" => CitiesResource::make($this->ToCity),
            "currencie" => $this->Currencies

        ]);
    }
}
