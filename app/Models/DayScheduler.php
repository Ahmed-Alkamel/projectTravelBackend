<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DayScheduler extends Model
{
    use HasFactory;
    protected $table = 'day_schedulers';

    public $timestamps = false;

    public $fillable = [
        'idScheduler',
        'idDay',
    ];
    protected $casts = [
        'idScheduler' => 'integer',
        'idDay' => 'integer',
    ];
    public function Days()
    {
        return $this->belongsTo(Days::class, 'idDay');
    }
    public function SchedulerTrip()
    {
        return $this->belongsTo(SchedulerTrip::class, 'idScheduler', 'idScheduler');
    }
}
