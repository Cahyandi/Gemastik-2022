<?php

namespace App\Http\Controllers;

use App\Models\Dinas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthUserController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $validateData = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // ddd($validateData);
        if (Auth::attempt($validateData)) {
            $login = User::where('username', $validateData['username'])->first();
            auth()->login($login);
            $request->session()->regenerate();
            $request->session()->regenerateToken();
            return redirect()->intended('/');
        } else if (Auth::guard('dinas')->attempt($validateData)) {
            $login = Dinas::where('username', $validateData['username'])->first();
            auth()->login($login);
            $request->session()->regenerate();
            $request->session()->regenerateToken();
            return redirect()->intended('/dashboard');
        } else {
            return back()->withErrors(['loginError' => 'Incorrect your username or password']);
        }
    }

    public function registered(Request $request)
    {
        $validateData = $request->validate([
            'username' => 'required|unique:users',
            'name' => 'required|min:3',
            'no_telp' => 'required|max:13',
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);
        $validateData['password'] = bcrypt($validateData['password']);
        $user = User::create($validateData);
        if ($user) {
            $login = User::where('username', $validateData['username'])->first();
            auth()->login($login);
            $request->session()->regenerate();
            $request->session()->regenerateToken();
            return redirect('/gemastik');
        } else {
            return back()->with('Failled Register', 'Ada Kesalahan saat Registrasi');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
