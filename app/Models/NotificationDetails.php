<?php

namespace App\Models;

use App\Events\NotificationEvent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificationDetails extends Model
{
    use HasFactory;

    protected $table = 'notification_details';
    public $incrementing = true;
    public $primaryKey = 'id';
    public $timestamps = false;
    protected $keyType = 'integer';

    // protected static function boot()
    // {
    //     parent::boot();
    //     static::created(function ($messange) {
    // event(new NotificationEvent($messange));

    //     });
    // }
    public $fillable = [
        'id',
        'idCustomerRequsts',
        'idNotificationTemplete',
        'idCus',
        'isRecive',
    ];
    protected $casts = [
        'id' => 'integer',
        'idCustomerRequsts' => 'integer',
        'idNotificationTemplete' => 'integer',
        'idCus' => 'integer',
        'isRecive' => 'boolean'
    ];


    public function NotificationTemplets()
    {
        return $this->belongsTo(NotificationTemplets::class, 'idNotificationTemplete', 'id');
    }
}
