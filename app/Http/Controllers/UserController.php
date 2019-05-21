<?php

namespace App\Http\Controllers;
use Auth;
use Alert;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class UserController extends Controller
{
    use AuthenticatesUsers;


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
  
     public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|exists:users,email',
            'password' => 'required',
        ]);
        $attempts = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($attempts)) {
            Alert::success('Login', 'Berhasil Login');

            return redirect('/admin');
        }
        return redirect()->back();
    }
    public function logout()
    {   
        Auth::logout();
        return redirect('/');

    }
    public function admin()
    {
        return view('layouts.admin.master');
    }
}
