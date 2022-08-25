<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function authenticate(Request $request){
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
            $request->session()->regenerateToken();
            return redirect("/welcome");
        }
        return back()->withErrors(['failed'=>"Mot de passe/Email incorect!!!"]);
    }
}
