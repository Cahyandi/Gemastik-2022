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
            // return redirect()->intended('/dashboard');
            return redirect('/dashboard');
        } else {
            return back()->withErrors(['loginError' => 'Incorrect your username or password']);
        }
    }

    public function registerPetugas(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|min:4|unique:dinas',
            'email'    => 'required|email',
            'no_telp'  => 'required|min:12',
            'password' => 'required'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['role'] = 'petugas';
        $petugas = Dinas::create($validatedData);
        if ($petugas) {
            return redirect('/login-dinas')->with('success', 'Registrasi berhasil, silahkan login');
        } else {
            return back()->with('Failled Register', 'Ada Kesalahan saat Registrasi');
        }
    }
}
