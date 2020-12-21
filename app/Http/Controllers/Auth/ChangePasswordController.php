<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

use Hash;

class ChangePasswordController extends Controller
{
    /* otvara formu za promjenu lozinke */
    public function edit($id)
    {
        return view('change_password.edit', ['id' => $id]);
    }

    /* pozvano na Save gumb */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'password' => 'required|min:5|confirmed'
        ]);

        $data['password'] = Hash::make($data['password']);
        
        /* u jednoj liniji dohvati korisnika i promijeni password */
        User::findOrFail($id)
            ->fill($data) // $data = ['password' => 'password-sa-frontenda']
            ->save();
        

        return redirect()->route('users.show', ['user' => $id]);
    }
}
