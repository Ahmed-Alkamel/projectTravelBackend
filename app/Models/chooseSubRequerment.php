<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chooseSubRequerment extends Model
{
    use HasFactory;
    protected $table = 'choice_sub_requerments';
    public $incrementing = true;
    public $primaryKey = 'idChooseSub';
    public $timestamps = false;
    protected $keyType = 'integer';
    public $fillable = [

        'idChooseSub',
        'idSubReqDetail',
        'containt'
    ];
    public $casts = [

        'idChooseSub' => 'integer',
        'idSubReqDetail' => 'integer',
        'containt'
    ];

    public function SubRequiremntsDetails()
    {
        return $this->belongsTo(SubRequiremntsDetails::class, 'idSubReqDetail');
    }
}
