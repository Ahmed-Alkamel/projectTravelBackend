<?php

namespace App\Http\Resources;

use App\Helpers\constant\Constant;
use App\Http\Resources\collections\MainRequiremntsCollection;
use App\Http\Resources\collections\SubRequiremntsCollection as CollectionsSubRequiremntsCollection;
use App\Models\CategoriesServicesMain;
use App\Models\MainRequiremnts;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

class ServicesResource extends JsonResource
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
                'id' => $this->idServ,
                'name' => $this->serviceName,
                // 'isInternal' =>(bool) $this->isInternal,
                'category' => CategoriesServicesResource::make($this->CategoriesServicesMain),
            ]);
        } else {
            $subRequirments = CollectionsSubRequiremntsCollection::make($this->SubRequiremnts);

            return [
                'id' => $this->idServ,
                'name' => $this->serviceName,
                'category' => CategoriesServicesResource::make($this->CategoriesServicesMain),
                'serviceDetails' => ServicesDetailstResource::make($this->ServicesDetails),
                'pathImage' => asset(Storage::url(Constant::getPathServicesImage() . $this->pathImage)),
                'identitfyRequerment' => IdentityResource::collection($this->ServicesAndIdentify),
                'mainRequirment' =>  MainRequiremntsResource::collection($this->MainRequiremnts) ?? null,
                'subRequiremnts' => $subRequirments
            ];
        }
    }
}
