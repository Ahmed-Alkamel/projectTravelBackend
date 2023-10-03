<?php

namespace App\Http\Resources\collections;

use App\Http\Resources\MainRequiremntsResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class MainRequiremntsCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return  MainRequiremntsResource::collection($this->collection);
    }
}
