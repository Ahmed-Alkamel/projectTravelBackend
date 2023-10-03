<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubRequiremntsDetails extends Model
{
    use HasFactory;
    protected $table = 'sub_requiremnts_details';
    public $incrementing = true;
    public $primaryKey = 'idSubReqDetail';
    public $timestamps = false;
    protected $keyType = 'integer';

    public $fillable = [
        'idSubReqDetail',
        'idSubRequire',
        'textRerequiremnts',
        'idTypeFild'

    ];


    public function SubRequiremnts()
    {
        return $this->belongsTo(SubRequiremnts::class,'idSubRequire');

    }
    public function chooseSubRequerment()
    {
        return $this->hasMany(chooseSubRequerment::class,'idSubReqDetail');
    }
   public function TypeOfFild()
   {
     return $this->belongsTo(TypeOfFild::class,'idTypeFild');
   }

//class is doctor

}
