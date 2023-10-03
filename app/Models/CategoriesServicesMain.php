<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriesServicesMain extends Model
{
    use HasFactory;

    protected $table = 'categories_services_mains';
    public $incrementing = true;
    public $primaryKey = 'idCategoryMain';
    public $timestamps = false;
    protected $keyType = 'integer';
    public $fillable = [

        'idCategoryMain',
        
        'idSubCategory',
        'nameCategoryMain',

    ];

//class is doctor
   public function FunctionName()
   {
    return $this->hasMany(Services::class,'idCategoryMain');
   }
   public function SelfBe()
   {
    return $this->belongsTo(CategoriesServicesMain::class,'idSubCategory','idCategoryMain',
    'SelfHas');
   }
   public function SelfHas()
   {
    return $this->hasMany(CategoriesServicesMain::class,'idSubCategory','idCategoryMain');
   }
    public function Companies()
    {
        return $this->hasMany(Companies::class, 'idCategoryMain');
    }

}
