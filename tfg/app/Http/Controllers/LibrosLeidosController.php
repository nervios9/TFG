<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LibrosLeidos;
use App\Models\Libro;
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
       
        $listaLibrosLeidos = LibrosLeidos::all();

        return view('dashboard', ['listaLibrosLeidos' => $listaLibrosLeidos]);
}

}


