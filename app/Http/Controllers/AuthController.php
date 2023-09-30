<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    // public function register()
    // {
    //     return view('auth.register');
    // }

    // public function registerPost(Request $request)
    // {
    //     $user = new User();

    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->password = Hash::make($request->password);

    //     $user->save();

    //     return back()->with('success', 'Register berhasil!');
    // }

    public function login()
    {
        return view('auth.login');
    }

    public function loginPost(Request $request)
    {
        $email = "admin@gmail.com";
        $password = "123";

        if ($request->input('email') == $email && $request->input('password') == $password) {
            Session::put('email', $email);
            return redirect()->route('home')->with('success', 'Login successful. Redirecting to dashboard.');
        } else {
            return redirect()->back()->with('error', 'Invalid credentials!');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }

    public function setelahLogin()
    {
        return view('home');
    }
}
