<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificationTemplets extends Model
{
    use HasFactory;
    protected $table = 'notification_templets';
    public $incrementing = true;
    public $primaryKey = 'id';
    public $timestamps = false;
    protected $keyType = 'integer';
    public $fillable = [
        'id',
        'titleTemplet',
        'titleNotification',
        'body',
        'summury'
    ];
    protected $casts = [
        'id' => 'integer',

    ];
}
