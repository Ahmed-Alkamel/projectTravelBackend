<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Route;

class PermissionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request,)
    {

        if (Route::currentRouteName() == 'index.index') {
            return ([
                'id' => $this->id,
                'name' => $this->name,
            ]);
        } else {
            $data =     $this->PermissonAndEmployee[0];
            return ([
                'id' => $this->id,
                'name' => $this->name,

                'allow' => $data['allow'],
                'deny' => $data['deny']
            ]);
        }
    }
}
