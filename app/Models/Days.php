<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Days extends Model
{
    use HasFactory;
    protected $table = 'days';
    public $incrementing = true;
    public $primaryKey = 'id';
    public $timestamps = false;
    protected $keyType = 'integer';
    public $fillable = [
        'id',
        'name'
    ];
    public function DayScheduler()
    {
        return $this->hasMany(DayScheduler::class, 'idDay', 'id');
    }
}
