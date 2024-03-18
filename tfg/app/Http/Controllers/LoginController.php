<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
{
    $request->validate([
        'name' => 'required|string',
        'password' => 'required|string',
    ]);

    $credentials = $request->only('name', 'password');

    if (Auth::attempt($credentials)) {
        // Autenticación exitosa
        return redirect()->intended('/dashboard');
    }

    // Autenticación fallida
    return back()->withErrors([
        'name' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
    ]);
}
}
