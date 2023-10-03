<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\Match_;

class IdentityCustomers extends Model
{
    use HasFactory;
    protected $table = 'identity_customers';
    public $incrementing = true;
    public $primaryKey = 'ID';
    public $timestamps = false;
    protected $keyType = 'integer';
    public $fillable = [

        'ID',

        'datePirth',
        'idTypeIdentity',
        'releaseDate',
        'idCard',
        'idGender',
        'idMartial'

    ];
    protected $casts = [
        'ID' => 'integer',
        'idMartial' => 'integer',
        'datePirth' => 'string',
        'idTypeIdentity' => 'integer',

        'idGender' => 'integer',
    ];
    public function Gender()
    {
        return  $this->belongsTo(Gender::class, 'idGender', 'idGender');
    }
    public function IdentityType()
    {
        return $this->belongsTo(IdentityType::class, 'idTypeIdentity');
    }
    public function MartialStatus()
    {
        return $this->belongsTo(MartialStatus::class, 'idMartial', 'idMartial');
    }
    public function CustomerName()
    {
        return $this->hasOne(CustomerName::class, 'idCusIdentity', 'ID');
    }
    public function CustomerWithIdentity()
    {
        return $this->hasMany(CustomerWithIdentity::class, 'IdentityCustomers', 'ID');
    }
}
