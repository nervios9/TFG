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
        return redirect()->back()->with('perfecto', 'Libro leido agregado');
    }
    public function leidos($id)
    {
       
        $listaLibrosLeidos = LibrosLeidos::all(); // Replace this with your actual query to retrieve the data

        return view('dashboard', ['listaLibrosLeidos' => $listaLibrosLeidos]);
}

}


