<?php

namespace App\Http\Controllers;

use App\Models\Dinas;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AuthDinasController extends Controller
{
    public function authenticate(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::guard('dinas')->attempt($validatedData)) {
            $login = Dinas::where('username', $validatedData['username'])->first();
            auth()->login($login);
            $request->session()->regenerate();
            $request->session()->regenerateToken();
            return redirect()->intended('/dashboard');
        } else {
            return back()->withErrors(['loginError' => 'Incorrect your username or password']);
        }
    }
}
