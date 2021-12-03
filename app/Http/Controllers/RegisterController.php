<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        // rules of validated data
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users', //unique:users -> unique dari table users
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // Enkripsi Password
        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);


        return redirect('/login')->with('success', 'Registration successfully! Please login');
    }
}
