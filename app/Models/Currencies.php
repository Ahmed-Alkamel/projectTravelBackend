<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currencies extends Model
{
    use HasFactory;
    protected $table = 'currencies';
    public $incrementing = true;
    public $primaryKey = 'id';
    public $timestamps = false;
    protected $keyType = 'integer';
    public $fillable = [
        'id',
        'name',
        'codeAr',
        'codeEn',
        'conversionRate',
        'isDefaulte'
        // 'startingDate',
        // 'ltinerary',

    ];

    protected $casts = [

        'id' => 'integer',
        'name',
        'codeAr',
        'codeEn',
        'conversionRate' => 'double',
        'isDefaulte' => 'boolean',
    ];
    public function Trips()
    {
        return $this->hasMany(Trips::class, 'idCurrencies', 'id');
    }
}
