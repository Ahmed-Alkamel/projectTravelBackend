<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use Illuminate\Support\Facades\Route;
use function PHPSTORM_META\map;

class CategoriesServicesSecandrayResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

       
        if(Route::currentRouteName()=='category.index'){
            // if ($this->idCategoryDetail==null){
            //     return [];
            // }
            // else{
                return ([
                    //'idSec' => $this->resource,
                
               // 'idCategoryMain'=>$this->idCategoryMain,
                   'idSec' => $this->idCategoryDetail,
                     
                    'name' => $this->CategoriesServicesDetails->away??null,
          
                    
                 ]);
           // }
          
            
        }
        else if(Route::currentRouteName()=='trips.index'){
            return([
                'idSec' => $this->idCategoryDetail,
                     
                    'name' => $this->away,
          
                    
            ]);
        }
        else{
            return ([
             //  'idCategoryMain'=>$this->CategorServicesDetailRelation,
                         'idSec' => $this->idCategoryDetail,
                
                'name' => $this->away
               
            ]);
        }
      //  dd($data);
     
       
      
          
           
        
       
    }
}
