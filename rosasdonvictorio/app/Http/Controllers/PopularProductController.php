<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PopularProduct;
use App\Product;
use Session;
use Redirect;

class PopularProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos_populares = PopularProduct::All();
        $productos = Product::leftJoin('popular_products','products.id','popular_products.product_id')->join('categories', 'categories.id', '=', 'products.category_id')->where('category_type_id', 1)->whereNull('popular_products.product_id')->pluck('nombre','products.id');
        return view('plantillas.destacados',compact('productos_populares','productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         PopularProduct::create($request->all());
        return redirect('/admin/destacados')->with('message','Guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
                PopularProduct::destroy($id);
                Session::flash('message','Producto eliminado correctamente');
                return Redirect::to('/admin/destacados');

            } catch (\Illuminate\Database\QueryException $e) {
                Session::flash('error','No se puede eliminar ');
                return Redirect::to('/admin/destacados');

            } 
    }
}
