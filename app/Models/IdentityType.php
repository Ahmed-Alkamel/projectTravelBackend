<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdentityType extends Model
{
    use HasFactory;
    public function ServicesAndIdentify()
    {
        return $this->hasMany(ServicesAndIdentify::class,'id');
    }
}
