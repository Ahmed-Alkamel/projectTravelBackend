<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ChatResourc extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $data = $this->Chat;
        return ([
            'idCus' => $this->idCus,
            'nikName' => $this->nikName,
            'idChat' => $data->id,
            'chats' => $data->ChatContaint

        ]);
    }
}
