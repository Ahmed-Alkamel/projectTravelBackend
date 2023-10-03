<?php

namespace App\Http\Resources;

use App\Models\CategoriesServicesMain;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Route;

class CategoriesServicesResource extends JsonResource
{
   
    public function toArray($request)
    {
        // dd($request);

        if (Route::currentRouteName() == 'category.index') {

            if($this->idSubCategory!=null){
                
            }

            return ([
               
                'idCategoryMain'=>$this->idCategoryMain,            
                'nameCategoryMain'=>$this->nameCategoryMain,
                'idSubCategory'=>$this->idSubCategory,
             //   'parintCategory'=>$this->idSubCategory!=null? $this->getParent($this->idSubCategory)->idCategoryMain:null,
                'SubCategory'=> CategoriesServicesResource::collection($this->SelfHas),
                'levelTwoCategory'=>$this->idSubCategory!=null? $this->getLevekTwo($this->idSubCategory)->idCategoryMain:null,
              //  'subCategory'=>$this->getSubCategory($this->idCategoryMain),
               
                //  'categorySecondry'=>$categorySub->count()<=1?null:$categorySub

            ]);
        } else if (Route::currentRouteName() == 'Services.showAll') {
            return ([

                'idCategoryMain'=>$this->idCategoryMain,            
                'nameCategoryMain'=>$this->nameCategoryMain,
                'idSubCategory'=>$this->idSubCategory,
             //   'parintCategory'=>$this->idSubCategory!=null? $this->getParent($this->idSubCategory)->idCategoryMain:null,
                'SubCategory'=> CategoriesServicesResource::collection($this->SelfHas),
                'levelTwoCategory'=>$this->idSubCategory!=null? $this->getLevekTwo($this->idSubCategory)->idCategoryMain:null,
              //  'subCategory'=>$this->getSubCategory($this->idCategoryMain),
               
                

            ]);
        }
        else{
            return ([
               
              
                'idCategoryMain'=>$this->idCategoryMain,            
                'nameCategoryMain'=>$this->nameCategoryMain,
                'idSubCategory'=>$this->idSubCategory,
             //   'parintCategory'=>$this->idSubCategory!=null? $this->getParent($this->idSubCategory)->idCategoryMain:null,
                'SubCategory'=> CategoriesServicesResource::collection($this->SelfHas),
                'levelTwoCategory'=>$this->idSubCategory!=null? $this->getLevekTwo($this->idSubCategory)->idCategoryMain:null,
              //  'subCategory'=>$this->getSubCategory($this->idCategoryMain),
               
                //  'categorySecondry'=>$categorySub->count()<=1?null:$categorySub
            ]);
        }
       
        // return ([
        //     'id'=>$this->idCategoryMain,
        //     'name'=>$this->CategoriesServicesMain->nameCategoryMain?? $this->nameCategoryMain ,
        //     'nameRoute'=>Route::currentRouteName()
        //     //'categorySecondry'=>$CategorysSeconderyCatergory->count()<1?  ( $CategorysSeconderyCatergory->count()>1?$CategorysSeconderyCatergory:null) :$CategorysSeconderyServices
        //            //'categorySecondry'=>CategoriesServicesSecandrayResource::make($this->whenLoaded('CategorServicesDetailRelation'))

        // ]);
        // categories_services_details": {
        //     "idCategoryDetail": 3,
        //     "away": "جو"
        //     },
    }
     function getParent($id)
    {  $data=CategoriesServicesMain::all()->firstWhere('idCategoryMain','=',$id);
       if($data->idSubCategory!=null)
    { $data=$this->getParent($data->idSubCategory);}
        
        return $data;
       


    }   
    public function getSubCategory($id) 
    {
        $data=CategoriesServicesMain::all()->where('idSubCategory','=',$id);
        return CategoriesServicesResource::collection($data) ;
    }
    public function getLevekTwo($id) 
    {
        $data=CategoriesServicesMain::all()->firstWhere('idCategoryMain','=',$id);
        return $data;
    }
}
