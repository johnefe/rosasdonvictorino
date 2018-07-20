<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

use Session;
use Redirect;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('authAdmin');
    }
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->get();
        return view('product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name','id');
        return view('product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $product =  Product::create($request->all());
        return redirect('/admin/precios/create')->with('id',$product->id);
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
        $producto = Product::find($id);
        $categories = Category::pluck('name','id');
        return view('product.edit',['product'=>$producto,'categories'=>$categories]);
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
        $producto = Product::find($id);
        $producto->fill($request->all());
        $producto->save();

        Session::flash('message','Producto Editado correctamente');

        return Redirect::to('/admin/productos');
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
                Product::destroy($id);
                Session::flash('message','Producto eliminado correctamente');
                return Redirect::to('/admin/productos');

            } catch (\Illuminate\Database\QueryException $e) {
                Session::flash('error','No se puede eliminar por que tiene precios');
                return Redirect::to('/admin/productos');

            } 
    }
}
