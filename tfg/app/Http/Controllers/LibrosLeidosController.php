<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LibrosLeidos;
class LibrosLeidosController extends Controller
{
    public function librosLeidos(Request $request){
        $nuevoLibroLeido = new LibrosLeidos();
        $nuevoLibroLeido ->libro_id = $request->input('libro_id');
        $nuevoLibroLeido ->usuario_id = $request->input('usuario');
        $nuevoLibroLeido ->save();
        return "Libro registrado correctamente <br> <a href='all'>Volver</a>";
    }
    public function leidos($id)
    {
       
        $listaLibrosLeidos = LibrosLeidos::all();
        return view('/dashboard', ['listaLibrosLeidos' => $listaLibrosLeidos]);
    }
}
