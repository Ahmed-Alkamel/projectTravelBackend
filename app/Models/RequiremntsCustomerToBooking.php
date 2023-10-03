<?php

namespace App\Models;

use App\Models\StateRequerment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequiremntsCustomerToBooking extends Model
{
    use HasFactory;
    protected $table = 'requiremnts_customer_Trip_bookings';
    public $incrementing = true;
    public $primaryKey = 'id';
    protected $keyType = 'integer';


    public $timestamps = false;


    public $fillable = [
        'idDetailsTripBooking',
        'idMainRequire',
        'idSubReqDetail',
        'textValue',
        'idTypeFiled',
        'urlFile',
        'idChoice',
        'stateOfRequiremnt'
    ];
    protected $casts = [
        'idDetailsTripBooking' => 'integer',
        'idMainRequire' => 'integer',
        'idSubReqDetail' => 'integer',
        'textValue',
        'idTypeFiled' => 'integer',
        'urlFile',
        'idChoice' => 'integer',
        'stateOfRequiremnt' => 'integer'
    ];
    public function MainRequiremnts()
    {
        return $this->belongsTo(MainRequiremnts::class, 'idMainRequire');
    }
    public function SubRequiremntsDetails()
    {
        return $this->belongsTo(SubRequiremntsDetails::class, 'idSubReqDetail');
    }
    public function StateRequerment()
    {
        return $this->belongsTo(StateRequerment::class, 'idState', 'id');
    }
}
