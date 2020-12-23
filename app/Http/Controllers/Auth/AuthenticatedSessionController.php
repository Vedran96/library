<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    /* otvaranje login forme */
    public function create()
    {
        return view('auth.login');
    }

    /* klik na gumb Login */
    public function store(Request $request)
    {
        $formData = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        /* pokusaj napraviti prijavu, vrati error ako je login fail */
        if(!Auth::attempt($formData)) {
            throw ValidationException::withMessages([
                'username' => __('auth.failed')
            ]);
        }

        $request->session()->regenerate();
        return redirect()->route('home');
    }

    /* logout */
    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}