<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequermentCustommerServicesBookinng extends Model
{
    use HasFactory;
    protected $table = 'requerment_custommer_services_bookinngs';
    public $incrementing = true;
    public $primaryKey = 'id';
    protected $keyType = 'integer';
    public $timestamps = false;


    public $fillable = [
        'idServiceBookDetails',
        'idMainRequire',
        'idSubReqDetail',
        'textValue',
        'idTypeFiled',
        'urlFile',
        'idChoice',
        'stateOfRequiremnt'
    ];
    protected $casts = [
        'idServiceBookDetails' => 'integer',
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
    public function ServicesBookinngDetails()
    {
        return $this->belongsTo(ServicesBookinngDetails::class, 'idServiceBookDetails', 'idServiceBookDetails');
    }
    public function StateRequerment()
    {
        return $this->belongsTo(StateRequerment::class, 'idState', 'id');
    }
}
