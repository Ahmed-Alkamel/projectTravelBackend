<?php

namespace App\Http\Resources;

// use App\Models\Currencies;
use Illuminate\Http\Resources\Json\JsonResource;

class ServicesDetailstResource extends JsonResource
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
            'idServiceDetail' => $this->idServiceDetail,
            'priceService' => $this->priceService,
            'currencie' => $this->Currencies
            // 'durationOfServiceByDays' => $this->DurationOfServiceByDays,
            // 'lineServices'=>$this->idServiceDetail,
        ];
    }
}
