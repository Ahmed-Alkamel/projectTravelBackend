<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainRequiremnts extends Model
{
    use HasFactory;
    protected $table = 'main_requiremnts';
    public $incrementing = true;
    public $primaryKey = 'idMainRequire';
    public $timestamps = false;
    protected $keyType = 'integer';
    public $fillable = [
        'idMainRequire',
        'idServ',
        'nameRequirment',
        'idTypeFile',

        'timeUpdate',
        'timeAdd',
    ];
    protected $casts = [
        'idMainRequire' => 'integer',
        'idServ' => 'integer',
        'nameRequirment',
        'idTypeFile' => 'integer',

        'timeUpdate',
        'timeAdd',
    ];
    function Services()
    {
        return $this->belongsTo(Services::class, 'idServ');
    }



    public function TypeOfFild()
    {
        return $this->belongsTo(TypeOfFild::class, 'idTypeFile',);
    }
    public function chooseMainRequerment()
    {
        return $this->hasMany(chooseMainRequerment::class, 'idMainRequire');
    }
}
