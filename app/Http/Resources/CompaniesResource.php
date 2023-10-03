<?php

namespace App\Http\Resources;

use App\Http\Resources\ServiceMineResource;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Route;

class CompaniesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        if (Route::currentRouteName() == 'trips.index') {
            return ([
                'id' => $this->idCompanes,
                'name' => $this->companiyName,
            ]);
        } else {
            return [
                'id' => $this->idCompanes,
                'name' => $this->companiyName,
                'phone' => $this->numberPhone,
                // 'idCategoryService' => $this->idCategoryMain,
                'address' => $this->addressCompaniy,
                'timeUpdate' => $this->timeUpdate,

                'timeAdd' => $this->timeAdd,
                'servicesCompanyProvider' => CompanyServicesProviderResource::collection($this->CompaniesServices),

            ];
        }
    }
}
