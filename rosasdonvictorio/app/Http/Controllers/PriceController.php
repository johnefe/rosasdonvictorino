<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Price;
use App\Product;

use Session;
use Redirect;

class PriceController extends Controller
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
        $prices = Price::orderBy('product_id','des')->get();
        return view('price.index',compact('prices'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         //$products = Product::pluck('nombre','id');
         $id = 0;

        if(Session::has('id')){
            $id = Session::get('id');
            $products = Product::where('id', $id)->get()->pluck('nombre','id');

        }else{
            $products = Product::pluck('nombre','id');
        }
       
        return view('price.create',compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Price::create($request->all());
        return redirect('/admin/precios')->with('message','Precio Guardado exitosamente');
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
        $precio = Price::find($id);
        $products = Product::pluck('nombre','id');
        return view('price.edit',['price'=>$precio,'products'=>$products]);
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
        $precio = Price::find($id);
        $precio->fill($request->all());
        $precio->save();

        Session::flash('message','Producto Editado correctamente');

        return Redirect::to('/admin/precios');
        
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
                Price::destroy($id);
                Session::flash('message','Precio eliminado correctamente');
                return Redirect::to('/admin/precios');

            } catch (\Illuminate\Database\QueryException $e) {
                Session::flash('error','No se puede eliminar por que tiene precios');
                return Redirect::to('/admin/precios');

            } 
        
    }
}
