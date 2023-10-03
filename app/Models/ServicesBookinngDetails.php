<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesBookinngDetails extends Model
{
    use HasFactory;
    protected $table = 'services_bookinng_details';
    public $incrementing = true;
    public $primaryKey = 'idServiceBookDetails';
    public $timestamps = false;
    protected $keyType = 'integer';
    public $fillable = [
        'idServiceBookDetails',
        'idServicesBooking',
        'identityCustmerId'
    ];
    public $casts = [
        'idServiceBookDetails' => 'integer',
        'idServicesBooking' => 'integer',
        'identityCustmerId' => 'integer'
    ];
    public function ServicesBookinng()
    {
        return $this->belongsTo(ServicesBookinng::class, 'idServicesBooking', 'idServicesBooking');
    }
    public function IdentityCustomers()
    {
        return $this->belongsTo(IdentityCustomers::class, 'identityCustmerId', 'ID');
    }
    public function RequermentCustommerServicesBookinng()
    {
        return $this->hasMany(RequermentCustommerServicesBookinng::class, 'idServiceBookDetails', 'idServiceBookDetails');
    }
}
