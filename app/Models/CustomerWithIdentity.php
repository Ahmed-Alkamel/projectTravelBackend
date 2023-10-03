<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerWithIdentity extends Model
{
    use HasFactory;
    protected $table = 'customer_with_identities';

    public $timestamps = false;

    public $fillable = [
        'identityCustmerId',
        'idCus',
        'isMe',

    ];
    protected $casts = [
        'identityCustmerId' => 'integer',
        'idCus' => 'integer',
        'isMe' => 'boolean',
    ];


    public function Customers()
    {
        return $this->belongsTo(Customers::class, 'idCus');
    }
    public function IdentityCustomers()
    {
        return $this->belongsTo(IdentityCustomers::class, 'identityCustmerId');
    }
}
