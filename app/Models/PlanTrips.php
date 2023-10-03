<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanTrips extends Model
{
    use HasFactory;
    protected $table = 'plan_trips';
    public $incrementing = true;
    public $primaryKey = 'id';
    public $timestamps = false;
    protected $keyType = 'integer';

    public $fillable = [

        'id',
        'name',


    ];
    protected $casts = [
        'id' => 'integer',
        'name',
    ];
    public function TripsBookings()
    {
        return $this->hasMany(TripsBookings::class, 'id');
    }
}
