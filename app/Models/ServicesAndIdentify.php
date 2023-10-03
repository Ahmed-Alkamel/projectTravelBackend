<?php

namespace App\Models;

use App\Models\IdentityType;
use App\Models\Services;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesAndIdentify extends Model
{
    use HasFactory;
    protected $table = 'services_and_identifies';
    // public $incrementing = true;
    // public $primaryKey = 'idServ';
    public $timestamps = false;
    // protected $keyType = 'integer';

    public $fillable = [

        'idServ',
        'idIdentity'

    ];
    protected $casts = [
        'idServ' => 'integer',
        'idIdentity' => 'integer',

    ];

    public function Services()
    {
        return $this->belongsTo(Services::class, 'idServ');
    }
    public function IdentityType()
    {
        return $this->belongsTo(IdentityType::class, 'idIdentity');
    }
}
