<?php

namespace App\Models;

use App\Http\Controllers\SubRequrmentDetailAndTypFildController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeOfFild extends Model
{
    use HasFactory;
    protected $table = 'type_of_filds';
    public $incrementing = true;
    public $primaryKey = 'idTypeFild';
    public $timestamps = false;
    protected $keyType = 'integer';
    public $fillable = [
        
        'idTypeFild',
        'value',
        'nameType',
      
    ];

 public function SubRequiremntsDetails()
 {
  return $this->hasMany(SubRequiremntsDetails::class,'idTypeFild');
 }
    public function MainRequemnt()
  {
    return $this->hasMany(MainRequiremnts::class,'idTypeFild');
  }


   
}
