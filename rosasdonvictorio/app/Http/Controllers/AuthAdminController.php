<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Session;
use Redirect;

class AuthAdminController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/admin';

    
    public function showLogin()
    {
        return view('auth.login');
    }
   
}
