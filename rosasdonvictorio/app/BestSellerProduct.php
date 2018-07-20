<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class BestSellerProduct extends Model
{
    protected $fillable = [
        'product_id'
    ];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}

