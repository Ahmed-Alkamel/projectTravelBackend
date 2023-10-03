<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chat extends Model
{
    use HasFactory;
    protected $table = 'chats';
    public $incrementing = true;
    public $primaryKey = 'id';
    public $timestamps = false;
    protected $keyType = 'integer';
    public $fillable = [
        'id',
        'idCus',
        'timeUpdate',
        'timeAdd',

    ];
    protected $casts = [
        'id' => 'integer',
        'idCus' => 'integer',

    ];
    protected $hidden = [
        'timeUpdate',
        'timeAdd',
    ];
    public function Customers()
    {
        return $this->belongsTo(Customers::class, 'idCus');
    }
    public function ChatContaint()
    {
        return $this->hasMany(ChatContaint::class, 'idChat', 'id');
    }
}
