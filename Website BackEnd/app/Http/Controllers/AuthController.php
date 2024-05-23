<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\ElseIf_;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login',
        [
            'title' => 'Login',
            'active' => 'login'
        ]);

    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'no_hp'=>'required',
            'password'=>'required'
        ]);

        if (Auth::attempt($credentials)){
            if(Auth::user()->role=='admin'){
                $request->session()->regenerate();
                return redirect()->intended('/admin');
            }

            if(Auth::user()->role=='loket'){
                $request->session()->regenerate();
                return redirect()->intended('/loket');
            }

            if(Auth::user()->role == 'dokter'){
                $request->session()->regenerate();
                return redirect()->intended('/dokter');
            }

            if(Auth::user()->role == 'apoteker'){
                $request->session()->regenerate();
                return redirect()->intended('/apoteker');
            }

            if(Auth::user()->role == 'kasir'){
                $request->session()->regenerate();
                return redirect()->intended('/kasir');
            }

            else{
                return redirect()->intended('/');
            }
        }
        else{
            return back()->with('Login Failed', 'Wrong no.hp or Password');
        }
    }


    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
