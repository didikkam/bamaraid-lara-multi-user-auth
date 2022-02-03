<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function postLogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('beranda');
        }
        return redirect('login');
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/');
    }

}
