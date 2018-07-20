<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Point;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

use Session;
use Redirect;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*
    public function __construct(){
        $this->middleware('authAdmin');
    }*/
    public function index()
    {
        $clientes = Client::All();   
        $cumples = $movies = DB::select(
            'select nombres, apellidos, celular, fecha_nacimiento, fecha_nacimiento + 
            INTERVAL(YEAR(CURRENT_TIMESTAMP) - YEAR(fecha_nacimiento)) + 0 YEAR AS cumpleanos,
            fecha_nacimiento + INTERVAL(YEAR(CURRENT_TIMESTAMP) - YEAR(fecha_nacimiento)) + 1 YEAR AS nextcumpleanos
            FROM clients
            where fecha_nacimiento is not null
            ORDER BY CASE
                WHEN cumpleanos >= CURRENT_TIMESTAMP THEN cumpleanos
                ELSE nextcumpleanos
            END');
            
        return view('plantillas.listadoClientes',compact('clientes', 'cumples'));
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
        Client::create($request->all());
        return redirect('/cuentaUsuario');
    }
    /*

    public function storePoint(Request $request)
    {
        Point::create($request->all());
        return redirect('/admin/clientes')->with('message','store');
    }*/

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
        $cliente = Client::find($id);
        $cliente->fill($request->all());
        $cliente->save();

        Session::flash('message','Usuario Editado correctamente');

        return Redirect::to('/cuentaUsuario');
        
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
}
