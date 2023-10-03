<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MartialStatus extends Model
{
    use HasFactory;
    protected $table = 'martial_statuses';
    public $incrementing = true;
    public $primaryKey = 'idMartial';
    public $timestamps = false;
    protected $keyType = 'integer';
    public $fillable = [
        'idMartial',
        'nameAr',
        'nameEn'
    ];

    public function SubRequiremnts()
    {
        return $this->hasMany(SubRequiremnts::class, 'idMartial');
    }
    public function FunctionName()
    {
        return $this->hasMany(IdentityCustomers::class, 'idMartial');
    }
}
