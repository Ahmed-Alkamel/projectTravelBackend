<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SchedulerTripResource extends JsonResource
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
            'idScheduler' => $this->idScheduler,
            'method' => $this->MethodScheduler,
            'idTrips' => $this->idTrips,
            'atCount' => $this->atCount,
            // 'days' => $this->DayScheduler->Days,
            'days' => DaySchedulerResource::collection($this->DayScheduler),

            'time' => $this->time,
        ]);
    }
}
