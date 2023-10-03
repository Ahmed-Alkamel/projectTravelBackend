<?php

namespace App\Models;

use App\Models\RelativeRelation;
use App\Models\SubRequiremnts;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelativeRelationAndSubRequerment extends Model
{
    use HasFactory;

    public function RelativeRelation()
    {
        return $this->belongsTo(RelativeRelation::class,'idRelativRel');
    }
    public function SubRequiremnts()
    {
        return $this->belongsTo(SubRequiremnts::class,'idSubRequire');
    }
}
