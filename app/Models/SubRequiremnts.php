<?php

namespace App\Models;

use App\Models\RelativeRelationAndSubRequerment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\Readline\Hoa\Protocol;

class SubRequiremnts extends Model
{
    use HasFactory;
    protected $table = 'sub_requiremnts';
    public $incrementing = true;
    public $primaryKey = 'idSubRequire';
    public $timestamps = false;
    protected $keyType = 'integer';
    public $fillable = [
        'idSubRequire',
        'idServ',
        'idGender',
        'idMartial',
        'moreThanAge',
        'LessThanAge',
        'timeUpdate',
        'timeAdd'
    ];
    protected $casts = [
        'idSubRequire' => 'integer',
        'idServ' => 'integer',
        'idGender' => 'integer',
        'idMartial' => 'integer',
        'moreThanAge' => 'integer',
        'LessThanAge' => 'integer',
        'timeUpdate',
        'timeAdd'
    ];

    //class is doctor
    public function Services()
    {
        return $this->belongsTo(Services::class, 'idServ');
    }
    public function Gender()
    {
        return $this->belongsTo(Gender::class, 'idGender');
    }
    public function SubRequiremntsDetails()
    {
        return $this->hasMany(SubRequiremntsDetails::class, 'idSubRequire');
    }
    public function MartialStatus()
    {
        return $this->belongsTo(MartialStatus::class, 'idMartial');
    }
    public function RelativeRelationAndSubRequerment()
    {
        return $this->hasMany(RelativeRelationAndSubRequerment::class, 'idSubRequire');
    }
}
