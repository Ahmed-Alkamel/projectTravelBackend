<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IdentityCustomersResource extends JsonResource
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
            'id' => $this->ID,
            'name' => $this->CustomerName,
            'datePirth' => $this->datePirth,
            'typeIdentity' => IdentityTypeResource::make($this->IdentityType),
            'releaseDate' => $this->releaseDate,
            'gender' => $this->Gender,
            'martial' => $this->MartialStatus
        ]);
        // 'Gender',
        //     'IdentityType',
        //     'MartialStatus',
        //     'CustomerName'
    }
}
