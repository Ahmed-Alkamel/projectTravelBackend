<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
    protected $table = 'employees';
    public $incrementing = true;
    public $primaryKey = 'idEmp';
    public $timestamps = false;
    protected $keyType = 'integer';
    public $fillable = [
        'idEmp',
        'numberPhone',
        'address',
        'salary',
        'password',
        'isAdmin',
        'isActive'

    ];
    protected $casts = [
        'idEmp' => 'integer',

        'numberPhone',
        'address',
        'salary' => 'float',
        'isAdmin' => 'boolean',
        'isActive' => 'boolean'
    ];
    public function CustomerRequests()
    {
        return $this->hasMany(CustomerRequests::class, 'idEmp');
    }
    public function EmployeeNames()
    {
        return $this->hasOne(EmployeeNames::class, 'idEmp');
    }
    public function PermissonAndEmployee()
    {
        return $this->hasMany(PermissonAndEmployee::class, 'idEmp', 'idEmp');
    }
}
