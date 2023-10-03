<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatContaint extends Model
{
    use HasFactory;
    protected $table = 'chat_containts';
    public $incrementing = true;
    public $primaryKey = 'id';
    public $timestamps = false;
    protected $keyType = 'integer';
    public $fillable = [
        'id',
        'containt',
        'idChat',
        'idEmp',
        'isRecive'

    ];
    protected $casts = [
        'id' => 'integer',

        'containt',
        'idChat' => 'integer',
        'idEmp' => 'integer',
        'isRecive' => 'boolean'

    ];
}
