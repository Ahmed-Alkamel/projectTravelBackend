<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    use HasFactory;
    protected $table = 'companies';
    public $incrementing = true;
    public $primaryKey = 'idCompanes';
    public $timestamps = false;
    protected $keyType = 'integer';
    public $fillable = [

        'idCompanes',
        // 'idCategoryMain',
        'companiyName',
        'numberPhone',
        'addressCompaniy',

    ];
    protected $casts = [];

    public function CompaniesServices()
    {
        return $this->hasMany(CompaniesServices::class, 'idCompanes', 'idCompanes');
    }
    public function Trips()
    {
        return $this->hasMany(Trips::class, 'idCompanes');
    }

    public function CategoriesServicesMain()
    {
        return $this->belongsTo(CategoriesServicesMain::class, 'idCategoryMain');
    }
}
