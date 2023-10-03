<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermissonEmployee extends Model
{
    use HasFactory;
    protected $table = 'permisson_employees';
    public $incrementing = true;
    public $primaryKey = 'id';
    public $timestamps = false;
    protected $keyType = 'integer';

    public $fillable = [

        'id',
        'name',
        'idProcess'


    ];
    protected $casts = [
        'id' => 'integer',
        'idProcess' => 'integer',
        'name',
    ];
    public function Process()
    {
        return $this->belongsTo(Process::class, 'idProcess', 'id');
    }
    public function PermissonAndEmployee()
    {
        return $this->hasMany(PermissonAndEmployee::class, 'idPermisson', 'id');
    }
}
