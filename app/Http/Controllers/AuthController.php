<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register', ['title' => 'Register']);
    }

    public function register(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:225|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>bcrypt( $request->password),
        ]);

        return redirect()->route('login')->with('success', 'You have been registered successfully');
    }

    public function showLoginForm()
    {
        return view('auth.login', ['title' => 'Login']);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard')->with('success', 'You have been logged in');
        }

        return back()->withErrors('error', 'Invalid credentials');
    }

    public function dashboard()
    {
        return view('dashboard', ['title' => 'Dashboard']);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login')->with('success', 'You have been logged out');
    }
}
