<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TripBookingDetails extends Model
{
    use HasFactory;
    protected $table = 'trip_booking_details';
    public $incrementing = true;
    public $primaryKey = 'idDetailsTripBooking';
    public $timestamps = false;
    protected $keyType = 'integer';
    public $fillable = [
        'idDetailsTripBooking',
        'idBooking',
        'identityCustmerId',

        'idSubRequire'
    ];
    protected $casts = [
        'idDetailsTripBooking' => 'integer',
        'idBooking' => 'integer',
        'identityCustmerId' => 'integer',

        'idSubRequire' => 'integer'
    ];
    public function IdentityCustomers()
    {
        return $this->belongsTo(IdentityCustomers::class, 'identityCustmerId', 'ID');
    }
    public function RequiremntsCustomerToBooking()
    {
        return $this->hasMany(RequiremntsCustomerToBooking::class, 'idDetailsTripBooking');
    }
}
