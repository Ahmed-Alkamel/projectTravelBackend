<?php

namespace App\Http\Resources;

use App\Helpers\constant\Constant;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class RequermentCustommerServicesBookinngResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $textvalue = $this->textValue;
        $url = null;
        // $url=($idType == 2) ? asset(Storage::url(Constant::getPathRequstImage() . $this->urlFile)) :$idType==5? asset(Storage::url(Constant::getPathRequstFile() . $this->urlFile))
        if ($this->idTypeFiled == 2) {
            $url = asset(Storage::url(Constant::getPathRequstImage() . $this->urlFile));
        } else if ($this->idTypeFiled == 5) {
            $url = asset(Storage::url(Constant::getPathRequstFile() . $this->urlFile));
        }
        return ([
            // 'idDetailsTripBooking' => $this->idDetailsTripBooking,
            'idprim' => $this->id,
            'id' => $this->idServiceBookDetails,
            'mainRequire' => MainRequiremntsResource::make($this->MainRequiremnts),
            'subReqDetail' => SubRequiremntsDetailsResource::make($this->SubRequiremntsDetails),
            'textValue' => $textvalue,
            'idTypeFiled' => $this->idTypeFiled,
            //'urlFile' => $this->urlFile,
            'urlFile' => $url,
            'idChoice' => $this->idChoice,
            'stateOfRequiremnt' => $this->StateRequerment
        ]);
    }
}
