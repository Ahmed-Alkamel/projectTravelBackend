<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Customers extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'customers';
    public $incrementing = true;
    public $primaryKey = 'idCus';
    public $timestamps = false;
    protected $keyType = 'integer';
    public $fillable = [
        'idCus',
        'nikName',
        'numberPhone',
        'emailAddress',
        'password',
        'remember_token',
        'timeUpdate',
        'timeAdd',

    ];
    protected $casts = [
        'idCus' => 'integer',
        'nikName',
        // 'numberPhone' => 'integet',
        'emailAddress',

        'timeUpdate',
        'timeAdd',
    ];

    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];
    public function CustomerWithIdentity()
    {
        return $this->hasMany(CustomerWithIdentity::class, 'idCus');
    }
    public function CustomerRequests()
    {
        return $this->hasMany(CustomerRequests::class, 'idCus');
    }
    public function Chat()
    {
        return $this->hasOne(Chat::class, 'idCus');
    }
}
