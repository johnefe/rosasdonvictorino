<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// Get the currently authenticated user...


class CuentaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
         if(Auth::user()){
            $usuario_actual = Auth::user();
            if($usuario_actual->is_admin==0){
                return View('plantillas.cuentaUsuario',compact('user'));
                
            }else{
                return redirect('/admin');

            }

        }

        
    }
}

