<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//para cambiar de nombre al archivo
use Carbon\Carbon;

class Slider extends Model
{
    protected $fillable = [
        'ruta', 'nombre','descripcion','imagen'
    ];

    public function setImagenAttribute($imagen){
        $this->attributes['imagen'] = Carbon::now()->second.$imagen->getClientOriginalName();
        $name = Carbon::now()->second.$imagen->getClientOriginalName();
        \Storage::disk('local')->put('slider/'.$name, \File::get($imagen));

    }
    
}

