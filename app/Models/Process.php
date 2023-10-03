<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    use HasFactory;
    protected $table = 'processes';
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


    public function PermissonEmployee()
    {
        return $this->hasMany(PermissonEmployee::class, 'idProcess', 'id');
    }
}
