<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompaniesServices extends Model
{
    use HasFactory;
    protected $table = 'services_companies';
   // public $incrementing = true;
   // public $primaryKey = 'idServ';
    public $timestamps = false;
   // protected $keyType = 'integer';
    public $fillable = [
        
        'idCompanes',
        'idServ',
        
      
    ];

    public function Companies()
    {
        return $this->belongsTo(Companies::class,'idCompanes');
    }
    public function Services()
    {
        return $this->belongsTo(Services::class,'idServ');
    }
   
}
