<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function showForm()
    {
        return view('register');
    }
    public function handleForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);
        return redirect()->back()->with('success', 'dakchi howa hadak a wijdane!🎉');
    }
}
    
    
    
       