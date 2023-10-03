<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TripAndBookings extends Model
{
    use HasFactory;
    protected $table = 'trip_and_bookings';


    public $timestamps = false;


    public $fillable = [
        'idTrips',
        'idBooking',
        'dateGo',
        'dataBack'

    ];
    protected $casts = [
        'idTrips' => 'integer',
        'idBooking' => 'integer',
        'dateGo',
        'dataBack'
    ];
    public function Trips()
    {
        return $this->belongsTo(Trips::class, 'idTrips');
    }
    public function TripsBookings()
    {
        return $this->belongsTo(TripsBookings::class, 'idBooking');
    }
}
