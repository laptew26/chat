<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('register');
    }

    public function showLogin()
    {
        return view('login');
    }

    public function doRegister(AuthRequest $request)
    {
        User::create([
            'login' => $request->login,
            'password' => Hash::make($request->password),
        ]);
        return redirect(route('login'));
    }

    public function doLogin(AuthRequest $request)
    {
        Auth::attempt($request->except('_token'));
        return redirect(route('home'));
    }

    public function logout()
    {
        Auth::logout();
        return back();
    }
}
