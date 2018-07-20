<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{

    protected $fillable = [
        'tamaño','precio','product_id'
    ];
    //

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
