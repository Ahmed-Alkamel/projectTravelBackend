<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trips extends Model
{
    use HasFactory;

    protected $table = 'trips';
    public $incrementing = true;
    public $primaryKey = 'idTrips';
    public $timestamps = false;
    protected $keyType = 'integer';
    public $fillable = [
        'idTrips',
        'idCompany',
        'idServ',
        'fromCity',
        'idCurrencies',
        'toCity',
        'level',
        'price',
        'availableSeats',
        'timeLeave'
        // 'startingDate',
        // 'ltinerary',

    ];

    protected $casts = [
        'idTrips' => 'integer',
        // 'idCompany',
        'idServ' => 'integer',
        'idCurrencies' => 'integer',
        'fromCity',
        'toCity',
        'level',
        'price' => 'double',
        'availableSeats' => 'integer',
        // 'timeLeave'
    ];

    public function Companies()
    {
        return $this->belongsTo(Companies::class, 'idCompany');
    }
    public function Services()
    {
        return $this->belongsTo(Services::class, 'idServ');
    }
    public function FromCity()
    {
        return $this->belongsTo(Cities::class, 'fromCity');
    }
    public function ToCity()
    {
        return $this->belongsTo(Cities::class, 'toCity');
    }
    public function TripAndBookings()
    {
        return $this->hasMany(TripAndBookings::class, 'idTrips');
    }
    public function SchedulerTrip()
    {
        return $this->hasOne(SchedulerTrip::class, 'idTrips', 'idTrips');
    }

    public function Currencies()
    {
        return $this->belongsTo(Currencies::class, 'idCurrencies', 'id');
    }
}
