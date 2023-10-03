<?php

namespace App\Http\Resources;

use App\Http\Resources\CategoriesServicesResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiceMineResource extends JsonResource
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
            'idServ' => $this->idServ,
            'category' => CategoriesServicesResource::make($this->CategoriesServicesMain),
            'name' => $this->serviceName
        ]);
    }
}
