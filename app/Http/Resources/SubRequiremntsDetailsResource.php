<?php

namespace App\Http\Resources;

use App\Http\Resources\Collection\SubRequiremntsDetailsCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class SubRequiremntsDetailsResource extends JsonResource
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
            'id' => $this->idSubReqDetail,
            'idTypeFild' => $this->idTypeFild,
            'containt' => $this->textRerequiremnts,
            'typeFiled' => TypeOfFiledResouce::make($this->TypeOfFild),
            'choose' => $this->chooseSubRequerment,



        ]);
    }
}
