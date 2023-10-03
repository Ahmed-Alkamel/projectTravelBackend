<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerName extends Model
{
    use HasFactory;
    protected $table = 'customer_names';
    public $incrementing = true;

    public $timestamps = false;

    public $fillable = [
        'idCusIdentity',
        'frisName',
        'lastName',
        'surName',

    ];
    protected $hidden = [
        'idCusIdentity'
    ];

    public function FunctionName()
    {
        return $this->belongsTo(IdentityCustomers::class);
    }
}
