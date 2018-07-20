<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Occasion;
use App\Product;

use Session;
use Redirect;

class OccasionController extends Controller
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
        $ocasiones = Occasion::All();
        $occasions = Occasion::pluck('ocasion','id');
        $products = Product::join('categories', 'categories.id', '=', 'products.category_id')
            ->select('products.*')->where('category_type_id', 1)->get();
        return view('occasion.index',compact('ocasiones','occasions','products'));
        
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
        Occasion::create($request->all());
        return redirect('/admin/ocasiones')->with('message','Ocasion Guardada con exito');

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
        $ocasion = Occasion::find($id);
        $ocasion->fill($request->all());
        $ocasion->save();

        Session::flash('message','Ocasion Editado correctamente');

        return Redirect::to('/admin/ocasiones');
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
                Ocassion::destroy($id);
                Session::flash('message','Ocasion eliminado correctamente');
                return Redirect::to('/admin/ocasiones');

            } catch (\Illuminate\Database\QueryException $e) {
                Session::flash('error','No se puede eliminar por que tiene productos');
                return Redirect::to('/admin/ocasiones');

            } 
    }
}
