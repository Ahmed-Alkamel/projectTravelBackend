<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Route;

class ProcesseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        if (Route::currentRouteName() == 'index.index') {
            return ([
                'id' => $this->id,
                'name' => $this->name,
                'permission' => PermissionResource::collection($this->PermissonEmployee)
            ]);
        } else {
            return ([



                'id' => $this->id,
                'name' => $this->name,
                'permission' => PermissionResource::collection($this->PermissonEmployee)
            ]);
        }
    }
}
