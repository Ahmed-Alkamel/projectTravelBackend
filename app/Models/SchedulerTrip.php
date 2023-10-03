<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchedulerTrip extends Model
{
    use HasFactory;
    protected $table = 'scheduler_trips';
    public $incrementing = true;
    public $primaryKey = 'idScheduler';
    public $timestamps = false;
    protected $keyType = 'integer';
    public $fillable = [



        'idScheduler',
        'idMethod',
        'idTrips',
        'atCount',
        // 'idMethod',
        'time',

    ];
    protected $casts = [
        'idScheduler' => 'integer',
        'idMethod' => 'integer',
        'idTrips' => 'integer',
        'atCount' => 'integer',
        'time',
    ];
    public function DayScheduler()
    {
        return $this->hasMany(DayScheduler::class, 'idScheduler', 'idScheduler');
    }
    public function Trips()
    {
        return $this->belongsTo(Trips::class, 'idTrips', 'idTrips');
    }
    public function MethodScheduler()
    {
        return $this->belongsTo(MethodScheduler::class, 'idMethod', 'id');
    }
}
