<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;
    protected $table = 'genders';
    public $incrementing = true;
    public $primaryKey = 'idGender';
    public $timestamps = false;
    protected $keyType = 'integer';
    public $fillable = [
        'idGender',
        'nameAr',
        'nameEn'
    ];

    public function SubRequiremnts()
    {
        return $this->hasMany(SubRequiremnts::class, 'idGender');
    }
    public function IdentityCustomers()
    {
        return $this->hasMany(IdentityCustomers::class, 'idGender', 'idGender');
    }
}
