<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
     protected $table = 'datas';
    protected $fillable = [
        'email','ciudad','direccion','telefono','celular','facebook','youtube','pinterest','instagram'
    ];
}

