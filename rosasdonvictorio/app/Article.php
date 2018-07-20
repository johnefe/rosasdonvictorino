<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//para cambiar de nombre al archivo
use Carbon\Carbon;

class Article extends Model
{
    protected $fillable = [
        'titulo','descripcion','imagen'
    ];

     //mutador sirve para modificar elementso antes de ser guardados
    public function setImagenAttribute($imagen){
        $this->attributes['imagen'] = Carbon::now()->second.$imagen->getClientOriginalName();
        $name = Carbon::now()->second.$imagen->getClientOriginalName();
        \Storage::disk('local')->put($name, \File::get($imagen));

    }
    
}
