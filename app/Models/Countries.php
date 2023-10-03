<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Countries extends Model
{
    use HasFactory;

    protected $table = 'countries';
    public $incrementing = true;
    public $primaryKey = 'id';
    public $timestamps = false;
    // protected $keyType = 'integer';
    public $fillable = [
        'id',
        'countryName',
        'isLocal'

    ];
    protected $casts = [
        'id' => 'integer',
        'countryName',
        'isLocal' => 'boolean'
    ];

    public function Cities()
    {
        return $this->hasMany(Cities::class, 'idCountry',   'id');
    }
    public function PlacePirthCustomers()
    {
        return $this->hasMany(PlacePirthCustomers::class, 'idcountry', 'id');
    }
}
