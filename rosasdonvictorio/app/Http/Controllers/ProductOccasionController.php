<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductOccasion;
use App\Product;


class ProductOccasionController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   /* public function __construct(){
        $this->middleware('authAdmin');
    }*/
    public function index()
    {
        $ocasiones = Occasion::All();
        $occasions = Occasion::pluck('ocasion','id');
        $products = Product::pluck('nombre','id');
        return view('occasion.index',compact('ocasiones','occasions','products'));
        
    }


     public function store(Request $request)
    {   
        ProductOccasion::create($request->all());
        return "error";
       // return redirect('/admin/ocasiones')->with('message','Ocasion Guardada con exito');

    }
    public function guardar(Request $request){
        //return $request;

        parse_str(file_get_contents("php://input"), $_POST);
       // return "que";
        $json = $request->json()->all();
        if($json["operacion"] == "post"){
            $productoOcasion = new ProductOccasion;
            $productoOcasion->product_id = $json["product_id"];
            $productoOcasion->occasion_id =$json["occasion_id"];
            $productoOcasion->save();


            return $productoOcasion;

        }else{
            ProductOccasion::where('product_id', $json["product_id"])->where('occasion_id', $json["occasion_id"])->delete();
            return "bien";

        }
       /* $json = json_encode($json);
        $json = json_decode($json,true);*/
        

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
                ProductOccasion::destroy($id);
                return "exito";
               // Session::flash('message','Producto eliminado correctamente');
                //return Redirect::to('/admin/productos');

            } catch (\Illuminate\Database\QueryException $e) {
              //  Session::flash('error','No se puede eliminar por que tiene precios');
              //  return Redirect::to('/admin/productos');
                return "error";

            } 

    }
}

