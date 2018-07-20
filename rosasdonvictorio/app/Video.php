<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Video extends Model
{
    protected $fillable = [
        'link','ruta'
    ];

     //mutador sirve para modificar elementso antes de ser guardados
    
    /*public function setLinkAttribute($link){
        if(is_string($link)){


        }else{
            $this->attributes['link'] = Carbon::now()->second.$link->getClientOriginalName();
            $name = Carbon::now()->second.$link->getClientOriginalName();
            \Storage::disk('local')->put('slider/'.$name, \File::get($link));

        }

        
        

    }*/
}
