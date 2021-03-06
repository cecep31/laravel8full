<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login', [
            'title' => 'login',
            'active' => 'login'
        ]);
    }
    public function register()
    {
        return view('auth.register', [
            'title' => 'login',
            'active' => 'reigister'
        ]);
    }
    public function store(Request $request)
    {
        $validata = $validated = $request->validate([
            'name' => ['required', 'min:5'],
            'username' => ['required', 'min:5', 'max:10', 'unique:users'],
            'email' => ['required', 'email', 'unique:users', 'max:255'],
            'password' => ['required', 'min:8']
        ]);

        // $validata['password'] = bcrypt($validata['password']);
        $validata['password'] = Hash::make($validata['password']);

        User::create($validata);
        // $request->session()->flash('success',"berhasil daftar");

        return redirect('/login')->with('success', 'Registration success, pleas login!!');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return back()->withErrors('loginerror', 'login failed!');
    }
    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/login');
    }
}
