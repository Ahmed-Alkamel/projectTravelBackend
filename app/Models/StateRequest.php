<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StateRequest extends Model
{
    use HasFactory;

    protected $table = 'state_requests';
    public $incrementing = true;
    public $primaryKey = 'id';
    public $timestamps = false;
    protected $keyType = 'integer';
    public $fillable = [
        'id',
        'name'
    ];
    protected $casts = [
        'id' => 'integer',
        'name'
    ];
    public function CustomerRequests()
    {
        return $this->hasMany(CustomerRequests::class, 'idState', 'id');
    }
}
