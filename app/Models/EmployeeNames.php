<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeNames extends Model
{
    use HasFactory;
    protected $table = 'employee_names';
    public $incrementing = true;

    public $timestamps = false;

    public $fillable = [
        'idEmp',
        'frisName',
        'lastName',
        'surName',

    ];
    protected $hidden = [
        'idEmp'
    ];
    protected $casts = [
        'idEmp'
    ];
}
