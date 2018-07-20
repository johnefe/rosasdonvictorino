<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'client_id','fecha_compra','fecha_entrega','mensaje','de','para','direccion','observacion','was_payed'
    ];

    public function details()
    {
        return $this->hasMany('App\Detail');
    }

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

     public function total_carrito() {
        $total = 0;
        $detalles = $this->details;
        foreach ($detalles as $detalle) {
            $total += $detalle->cantidad * $detalle->precio;
        }
        return $total;
    }
}
