<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    protected $fillable = [
        'client_id','cart_id','puntos'
    ];

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function cart()
    {
        return $this->belongsTo('App\Cart');
    }

}
