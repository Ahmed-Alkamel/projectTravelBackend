<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesDetails extends Model
{
    use HasFactory;
    protected $table = 'services_details';
    public $incrementing = true;
    public $primaryKey = 'idServiceDetail';
    public $timestamps = false;
    protected $keyType = 'integer';
    public $fillable = [
        'idServ',
        'idServiceDetail',
        'priceService',
        'idCurren'
        // 'DurationOfServiceByDays',
        // 'lineServices',
    ];
    protected $casts = [
        'idServ' => 'integer',
        'idServiceDetail' => 'integer',
        'priceService' => 'double',
        'idCurren' => 'integer',
        // 'lineServices',
    ];
    protected $hidden = [
        'idServ'
    ];
    public function Services()
    {
        return $this->belongsTo(Services::class, 'idServ');
    }
    public function Currencies()
    {
        return $this->belongsTo(Currencies::class, 'idCurren', 'id');
    }
}
