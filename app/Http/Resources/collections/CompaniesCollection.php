<?php

namespace App\Http\Resources\collections;

use App\Http\Resources\CompaniesResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CompaniesCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return CompaniesResource::collection($this->collection);
    }
}
