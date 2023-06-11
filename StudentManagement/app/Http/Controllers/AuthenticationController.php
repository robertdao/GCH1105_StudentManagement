<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\Use_;

class AuthenticationController extends Controller
{
    public function loginIndex(){
        return view('Auth.login');
    }

    public function registerIndex(){
        return view('Auth.register');
    }
    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'confirmed'
        ]);
        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->save();
        Auth::login($users);
        return redirect('index')->with('success', 'You have successfully created an account !!!');
    }
}