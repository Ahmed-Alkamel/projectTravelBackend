<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermissonAndEmployee extends Model
{
    use HasFactory;

    protected $table = 'permisson_and_employees';
    public $incrementing = true;
    public $primaryKey = 'id';
    public $timestamps = false;
    protected $keyType = 'integer';

    public $fillable = [

        'id',
        'idPermisson',
        'idEmp',
        'allow',
        'deny'


    ];
    protected $casts = [
        'id' => 'integer',

        'idPermisson' => 'integer',
        'idEmp' => 'integer',
        'allow' => 'boolean',
        'deny' => 'boolean'
    ];
    public function Employees()
    {
        return $this->belongsTo(Employees::class, 'idEmp', 'idEmp');
    }
    public function PermissonEmployee()
    {
        return $this->belongsTo(PermissonEmployee::class, 'idPermisson', 'id');
    }
}
