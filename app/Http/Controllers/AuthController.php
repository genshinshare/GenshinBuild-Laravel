<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
        {
            return redirect('/dashboard');
        }
        else
        {
            session()->flash('gagal');
            return redirect()->back();
        }
    }
}