<?php

namespace App\Models;

use App\Models\ServicesAndIdentify;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;
    protected $table = 'services';
    public $incrementing = true;
    public $primaryKey = 'idServ';
    public $timestamps = false;
    protected $keyType = 'integer';

    public $fillable = [

        'idServ',
        // 'idRelationCatecgry',
        'serviceName',
        'pathImage',
        'idCategoryMain',
        // 'evaluate',
        'timeUpdate',
        'timeAdd',

    ];
    protected $casts = [
        'idServ' => 'integer',
        // 'idRelationCatecgry' => 'integer',
        'serviceName',

        'idCategoryMain' => 'integer',
        // 'evaluate',
        'timeUpdate',
        'timeAdd',
    ];

    //class is doctor
    public function SubRequiremnts()
    {
        return $this->hasMany(SubRequiremnts::class, 'idServ');
    }

    public function MainRequiremnts()
    {
        return $this->hasMany(MainRequiremnts::class, 'idServ');
    }
    public function CategoriesServicesMain()
    {
        return $this->belongsTo(CategoriesServicesMain::class, 'idCategoryMain');
    }

    public function CompaniesServices()
    {
        return $this->hasMany(CompaniesServices::class, 'idServ');
    }
    public function ServicesAndIdentify()
    {
        return $this->hasMany(ServicesAndIdentify::class, 'idServ');
    }
    public function CustomerRequests()
    {
        return $this->hasMany(CustomerRequests::class, 'idServ');
    }
    public function ServicesDetails()
    {
        return $this->hasOne(ServicesDetails::class, 'idServ');
    }
}
