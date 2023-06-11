<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function loginIndex(){
        return view('Auth.login');
    }

    public function registerIndex(){
        return view('Auth.register');
    }
}
