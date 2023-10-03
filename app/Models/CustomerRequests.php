<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerRequests extends Model
{
    use HasFactory;
    protected $table = 'customer_requests';
    public $incrementing = true;
    public $primaryKey = 'idCustomerRequsts';
    public $timestamps = false;
    protected $keyType = 'integer';
    public $fillable = [
        'idCustomerRequsts',
        'idServ',
        'idState',
        'idCus',
        'idEmp',

    ];
    protected $casts = [
        'idCustomerRequsts' => 'integer',
        'idServ' => 'integer',
        'idState' => 'integer',
        'idCus' => 'integer',
        'idEmp' => 'integer',
    ];
    public function Customers()
    {
        return $this->belongsTo(Customers::class, 'idCus');
    }
    public function Services()
    {
        return $this->belongsTo(Services::class, 'idServ');
    }
    public function Employees()
    {
        return $this->belongsTo(Employees::class, 'idEmp');
    }
    public function TripsBookings()
    {
        return $this->hasOne(TripsBookings::class, 'idCustomerRequsts', 'idCustomerRequsts');
    }
    public function ServicesBookinng()
    {
        return $this->hasOne(ServicesBookinng::class, 'idCustomerRequsts');
    }
    public function StateRequest()
    {
        return $this->belongsTo(StateRequest::class, 'idState', 'id');
    }
}
