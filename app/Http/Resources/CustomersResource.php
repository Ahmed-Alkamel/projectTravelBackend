<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomersResource extends JsonResource
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
            'idCus' => $this->idCus,
            'nikName' => $this->nikName,
            'numberPhone' => $this->numberPhone,
            'emailAddress' => $this->emailAddress,
            'idChat' => $this->Chat->id,
            'password' => $this->password,
            'identityMe' => CustomerWithIdentityResource::make($this->CustomerWithIdentity->where('isMe', true)->where('idCus', $this->idCus)->first()),
            'benefities' => CustomerWithIdentityResource::collection($this->CustomerWithIdentity->where('isMe', false))
        ]);
    }
}
