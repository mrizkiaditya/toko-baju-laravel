<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('users.register', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|min:4|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'level' => ''
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Registrasi Berhasil! Silahkan Login!');
    }
}
