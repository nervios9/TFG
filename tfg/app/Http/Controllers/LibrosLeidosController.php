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

        return "Libro registrado correctamente";

    }
    public function leidos($id)
    {
       
        $listaLibros = LibrosLeidos::all();
        return view('all', ['listaLibros' => $listaLibros,'listaGeneros' => $listaGeneros]);
    }
}
