<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function index()
    {
        return view('todo.signup', [
            'title' => 'signup'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);
        
        //$validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);
        
        User::create($validatedData);

        //$request->session()->flash('success', 'Registration successful! Please sign in');

        return redirect('/')->with('success', 'Registration successful! Please sign in');
    }
}
