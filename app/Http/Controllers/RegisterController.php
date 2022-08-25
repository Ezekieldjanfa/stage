<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }
    public function register(Request $request){
        $user=user::create([
            'name'=>$request->name,
            'number'=>$request->number,
            'email'=>$request->email,
            'password'=> Hash::make($request->password),
        ]);
        return back()->with('success', "Compte cree avec success");
    
        request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'number' => ['required', 'int', 'max:9'],
            // 'filiere_niveau' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);
        event(new Registered($user));

        Auth::login($user);
        return view('post.index');
    }
}
