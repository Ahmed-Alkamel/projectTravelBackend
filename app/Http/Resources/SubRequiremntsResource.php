<?php

namespace App\Http\Resources;

use App\Http\Resources\Collection\SubRequiremntsDetailsCollection;
use App\Models\SubRequiremnts;
use Illuminate\Http\Resources\Json\JsonResource;

class SubRequiremntsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // SubRequiremnts::all()->sortBy();
        return ([
            'IdSubRequerment' => $this->idSubRequire,
            'idGender' => $this->idGender,
            'isFamely' => (bool)$this->isfamely,
            'idMartial' => $this->idMartial,
            'lessThanAge' => $this->LessThanAge,
            'moreThanAge' => $this->moreThanAge,
            'detaial' => SubRequiremntsDetailsResource::collection($this->SubRequiremntsDetails->sortBy('idTypeFild'))
            //'DetailsSubRequrment'=>SubRequiremntsDetailsCollection::make($this->whenLoaded('SubRequiremntsDetails'))
        ]);
    }
}
