<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesCompanies extends Model
{
    use HasFactory;

    protected $table = 'services_companies';
   
    public $timestamps = false;
  
    public $fillable = [
        
        'idCompanes',
        'idServ'
        
      
    ];

    public function Services()
    {
        return $this->belongsTo(Services::class,'idServ');
    }

    public function Companies()
    {
        return $this->belongsTo(Companies::class,'idCompanes');
    }
}
