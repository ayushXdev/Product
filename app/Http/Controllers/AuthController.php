<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function loginUser(Request $req){
        // echo $req; exit();
        $data = $req->validate([
            'email'     =>  'required|email|regex:/^[A-Za-z0-9]+@[A-Za-z0-9]+\.[A-Za-z]{2,}$/',
            'password'  =>  'required|min:6|max:12',
        ]);

        $user = User::where('email',$req->email)->first();


        if(!$user){
             return redirect()->back()->with('error','User Not Found');
        }
        elseif($user && !(Hash::check($req->password, $user->password))){
            return redirect()->back()->with('error','Password Not match');
            
        }
        elseif($user && (Hash::check($req->password, $user->password))){
            Auth::login($user);
            return redirect()->route('dashboard')->with('success','login Successfully');
        }
    }
}
