<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesBookinng extends Model
{
    use HasFactory;
    protected $table = 'services_bookinngs';
    public $incrementing = true;
    public $primaryKey = 'idServicesBooking';
    public $timestamps = false;
    protected $keyType = 'integer';
    public $fillable = [

        'idServicesBooking',
        'idCustomerRequsts',
        'bookingServicesDate',
        'dateEndDurtion'
    ];
    protected $casts = [
        'idServicesBooking' => 'integer',
        'idCustomerRequsts' => 'integer',

        'bookingServicesDate',
        'dateEndDurtion'
    ];
    // public function Services()
    // {
    //     return $this->belongsTo(Services::class,'idServ');
    // }
    public function CustomerRequests()
    {
        return $this->belongsTo(CustomerRequests::class, 'idCustomerRequsts');
    }
    public function ServicesBookinngDetails()
    {
        return $this->hasMany(ServicesBookinngDetails::class, 'idServicesBooking');
    }
}
