<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    public function crearUsuarioForm()
    {
        return view('registrar');
    }

   
        public function register(Request $request)
        {
            $request->validate([
                'name' => 'required|string|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
            ]);
        
            Usuarios::create([
                'name' => $request->name,
                'password' => Hash::make($request->password),
            ]);
        
            return redirect('/login');
        }
}

