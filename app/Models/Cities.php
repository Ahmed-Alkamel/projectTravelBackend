<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    use HasFactory;

    protected $table = 'cities';
    public $incrementing = true;
    public $primaryKey = 'idCity';
    public $timestamps = false;
    // protected $keyType = 'integer';
    public $fillable = [
        'idCity',
        'idCountry',
        'cityName',

    ];

    public function Countries()
    {
        return $this->belongsTo(Countries::class, 'idCountry');
    }
    public function Trips()
    {
        return $this->hasMany(Trips::class, 'idCity');
    }
    public function PlacePirthCustomers()
    {
        return $this->hasMany(PlacePirthCustomers::class, 'idcity', 'id');
    }
}
