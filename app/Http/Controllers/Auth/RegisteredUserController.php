<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class RegisteredUserController extends Controller
{
    
    public function create()
    {
        $users = User::pluck('name','address','phone_number','username','id');
        return view('auth.register', compact('users'));
    }

  
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'address' => 'required|email|max:255',
            'phone_number' => 'required|min:12',
            'username' => 'required|username|min:5',
            'password' => 'required|min:7|confirmed',
        ]);

        $data['role_id'] = 2; 
        $data['password'] = Hash::make($data['password']);

      
        $user = User::create($data);

        
        Auth::login($user);
        event(new Registered($user));
        return redirect()->route('home');
    }
}