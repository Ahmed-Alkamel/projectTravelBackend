<?php

namespace App\Http\Resources\collections;

use App\Http\Resources\TypeOfFiledResouce;
use Illuminate\Http\Resources\Json\ResourceCollection;

class TypeOfFiledCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return  TypeOfFiledResouce::make($this->resource);
    }
}
