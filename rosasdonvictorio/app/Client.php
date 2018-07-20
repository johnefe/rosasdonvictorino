<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Point;


class Client extends Model
{

    protected $fillable = [
        'nombres','apellidos','sexo','direccion','celular','fecha_nacimiento','user_id','identificacion'
    ];
    ////
    public function user()
    {
        return $this->belongsTo('App\User');
    }

     public function carts()
    {
        return $this->hasMany('App\Cart');
    }

    public function points()
    {
        return $this->hasMany('App\Point');
    }


   /* public function total_points() {
        return$this->hasMany('FloristeriaColors\Point');
        //$collection = collect($points);

      //  return  $collection->sum('puntos');
       // return $this->points->sum('puntos');
    }*/
    
}

