<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Product;

class Category extends Model
{
    
    protected $fillable = [
        'name','category_type_id'
    ];

    /**
     * Get the comments for the blog post.
     */
    public function products()
    {
        return $this->hasMany('App\Product');
    }

    public function products_with_price() {
        return Product::rightJoin('prices','products.id','prices.product_id')
            ->select('products.*')->where('category_id', $this->id)->groupBy('products.id')->get();
    }

    public function category_type()
    {
        return $this->belongsTo('App\CategoryType');
    }

   


}

