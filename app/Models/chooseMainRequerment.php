<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chooseMainRequerment extends Model
{
    use HasFactory;
    protected $table = 'choice_main_requerments';
    public $incrementing = true;
    public $primaryKey = 'idChooseMain';
    public $timestamps = false;
    protected $keyType = 'integer';
    public $fillable = [

        'idChooseMain',
        'idMainRequire',
        'containt'

    ];
    public function MainRequiremnts()
    {
        return $this->belongsTo(MainRequiremnts::class, 'idMainRequire');
    }
}
