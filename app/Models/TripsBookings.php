<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TripsBookings extends Model
{
    use HasFactory;
    protected $table = 'trips_bookings';
    public $incrementing = true;
    public $primaryKey = 'idBooking';
    public $timestamps = false;
    protected $keyType = 'integer';
    public $fillable = [
        'idBooking',
        'idPlan',
        'BookingTime',
        'idCustomerRequsts'
    ];
    protected $casts = [
        'idBooking' => 'integer',
        'idPlan' => 'integer',
        'BookingTime',
        'idCustomerRequsts' => 'integer'
    ];

    public function TripAndBookings()
    {
        return $this->hasMany(TripAndBookings::class, 'idBooking');
    }
    public function PlanTrips()
    {
        return $this->belongsTo(PlanTrips::class, 'idPlan');
    }
    public function TripBookingDetails()
    {
        return $this->hasMany(TripBookingDetails::class, 'idBooking');
    }
}
