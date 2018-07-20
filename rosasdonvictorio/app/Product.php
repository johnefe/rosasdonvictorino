<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

//para cambiar de nombre al archivo
use Carbon\Carbon;


class Product extends Model
{
    protected $fillable = [
        'nombre','descripcion','imagen','category_id'
    ];

    //mutador sirve para modificar elementso antes de ser guardados
    public function setImagenAttribute($imagen){
        $this->attributes['imagen'] = Carbon::now()->second.$imagen->getClientOriginalName();
        $name = Carbon::now()->second.$imagen->getClientOriginalName();
        \Storage::disk('local')->put($name, \File::get($imagen));

    }
    
    
    /**
     * Get the products that owns the commen.
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function prices()
    {
        return $this->hasMany('App\Price');
    }

    public function occasions(){
        return $this->belongsToMany('App\Occasion','product_occasions');
    }
    
}
