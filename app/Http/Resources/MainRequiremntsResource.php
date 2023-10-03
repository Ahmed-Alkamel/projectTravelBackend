<?php

namespace App\Http\Resources;

use App\Http\Resources\Collection\SubRequiremntsDetailsCollection;
use App\Http\Resources\collections\TypeOfFiledCollection;
use App\Models\MainRequiremnts;
use App\Models\TypeOfFildDetialMainReq;
use Illuminate\Http\Resources\Json\JsonResource;

use function PHPSTORM_META\map;

class MainRequiremntsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)

    {
      //  $data=MainRequiremnts::with('$this->TypeOfFild')->where('idMainRequire',$this->idMainRequire)->getRelation('TypeOfFild')->get();
        
        return ([
            'id'=>$this->idMainRequire,
            'name'=>$this->nameRequirment,
           // 'typeFiled'=>$this->TypeOfFild,
           
         'typeFiled'=>TypeOfFiledResouce::make($this->TypeOfFild),
          'choose'=>$this->chooseMainRequerment
            //'optionTypeFiled'=> $subRe->count()>=1? $subRe:null
            
            // 'timeUpdate'=>$this->timeUpdate,
            // 'timeAdd'=>$this->timeAdd,

            
        ]);
    }
}
