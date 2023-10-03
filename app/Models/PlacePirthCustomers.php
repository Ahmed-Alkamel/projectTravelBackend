<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlacePirthCustomers extends Model
{
    use HasFactory;
    protected $table = 'place_pirth_customers';
    public $incrementing = false;

    public $timestamps = false;

    public $fillable = [
        'ID',
        'idcountry',
        'idcity',

    ];
    protected $casts = [
        'ID' => 'integer',
        'idcountry' => 'integer',
        'idcity' => 'integer',
    ];


    public function Countries()
    {
        return $this->belongsTo(Countries::class, 'idcountry');
    }
    public function Cities()
    {
        return $this->belongsTo(Cities::class, 'idcity');
    }
}
