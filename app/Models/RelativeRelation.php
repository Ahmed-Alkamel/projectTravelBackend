<?php

namespace App\Models;

use App\Models\RelativeRelationAndSubRequerment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelativeRelation extends Model
{
    use HasFactory;
    public function RelativeRelationAndSubRequerment()
    {
        return $this->hasMany(RelativeRelationAndSubRequerment::class,'id');
    }
    public function Genders()
{return   $this->belongsTo(Gender::class,'idGender');
}

}
