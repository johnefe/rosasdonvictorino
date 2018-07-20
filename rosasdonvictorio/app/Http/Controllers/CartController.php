<?php

namespace FloristeriaColors\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Client;
use App\Detail;
use App\User;
use App\Point;
use Illuminate\Support\Facades\Auth;
use Session;
use Redirect;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = Cart::orderBy('id', 'desc')->get();
        return view('plantillas.ventas',compact('carts'));
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

        $dataCart = Session::get('dataCart');
        $dataCart = json_encode($dataCart);
        $dataCart = json_decode($dataCart,true);

        $auth = Auth::user();
        $user = User::where('id',$auth->id)->first();


        $cart = new Cart;
       // $cart->client_id = $request->input('cliente_id');
        

        $time = strtotime($dataCart["fechaEntrega"]);
        $newformat = date('Y-m-d',$time);

        $cart->fecha_compra=  new \DateTime();
        $cart->fecha_entrega= $newformat;
        $cart->mensaje= $dataCart["mensaje"];
        $cart->observacion= $dataCart["observacion"];
        $cart->de= $dataCart["nombresComprador"];
        $cart->para= $dataCart["nombresDestinatario"];
        $cart->direccion= $dataCart["direccionDestinatario"];
        //$cart->observacion= $request->input('observacion');

        $cliente = $this->getCliente($user,$dataCart);
        $cliente->save();
        $cart->client_id = $cliente->id;
        $cart->save();

        //empezamos a trabajar con los detalles

        $details = Session::get('cart');
        $details = json_encode($details);
        $details = json_decode($details,true);

        for ($i = 0; $i < count($details); $i++) {
            //'cantidad','product_id','tamano','precio','cart_id'
            $detail = new Detail;
            $detail->cantidad =  $details[$i]["cantidadObjeto"];
            $detail->product_id =  $details[$i]["idObjeto"];
            $detail->tamano =  $details[$i]["tamaño"];
            $detail->precio =  $details[$i]["valorObjeto"];
            $detail->cart_id =  $cart->id;
            $detail->save();

            
        }


                            
        
        

        Session::forget('cart');
        Session::forget('dataCart');
        return Redirect::to('/');


      /*  if($user->client){
            //existe el cliente

            $cliente = Client::find($user->client->id);
            $cliente->
            $cliente->fill($request->all());
            $cliente->save();

        }else{
            // no existe el cliente
            
            $cliente = new Client;
            $cliente->nombres = $dataCart["nombresComprador"];
            $cliente->apellidos =$dataCart["apellidosComprador"];
            $cliente->celular =$dataCart["celularComprador"];
            $cliente->identificacion =$dataCart["identificacionComprador"];
            $cliente->user_id = $auth->id;
           
        }
           
        $cart->save();*/

        
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
        $cart = Cart::find($id);
        $cart->fill($request->all());
        $cart->save();

        $point = new Point;
        $point->client_id = $cart->client_id;
        $point->cart_id = $cart->id;
        $point->puntos = ($cart->total_carrito()/1000);
        
        $point->save();



        Session::flash('message','Carrito Confirmado correctamente');

        return Redirect::to('/admin/carritos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function getCliente(User $user, Array $dataCart){

         if($user->client){
            //existe el cliente

            $cliente = Client::find($user->client->id);
            $cliente->nombres = $dataCart["nombresComprador"];
            $cliente->apellidos =$dataCart["apellidosComprador"];
            $cliente->celular =$dataCart["celularComprador"];
            $cliente->identificacion =$dataCart["identificacionComprador"];
            return $cliente; 
        

        }else{
            // no existe el cliente
            
            $cliente = new Client;
            $cliente->nombres = $dataCart["nombresComprador"];
            $cliente->apellidos =$dataCart["apellidosComprador"];
            $cliente->celular =$dataCart["celularComprador"];
            $cliente->identificacion =$dataCart["identificacionComprador"];
            $cliente->user_id = $user->id;  
            return $cliente;    

        }


    }
}
