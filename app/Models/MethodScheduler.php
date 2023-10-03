<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MethodScheduler extends Model
{
    use HasFactory;
    protected $table = 'method_schedulers';
    public $incrementing = true;
    public $primaryKey = 'id';
    public $timestamps = false;
    protected $keyType = 'integer';
    public $fillable = [



        'id',
        'name',


    ];
    protected $casts = [
        'id' => 'integer',
        'name',

    ];
    protected $hidden = [
        'isActive'
    ];
    public function SchedulerTrip()
    {
        return $this->hasMany(SchedulerTrip::class, 'id');
    }
}
