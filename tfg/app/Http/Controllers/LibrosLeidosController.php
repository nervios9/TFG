<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LibrosLeidos;
use App\Models\Libro;
use Illuminate\Support\Facades\Auth;
class LibrosLeidosController extends Controller
{
    public function librosLeidos(Request $request){
       

        $nuevoLibroLeido = new LibrosLeidos();
        $nuevoLibroLeido ->libro_id = $request->input('libro_id');
        $nuevoLibroLeido ->usuario_id = $request->input('usuario');
        $nuevoLibroLeido ->save();

        
        return redirect()->back()->with('perfecto', 'Libro leido agregado');
    }
    public function leidos()
    {
        $userId = Auth::id();
        $listaLibrosLeidos = LibrosLeidos::where('usuario_id', $userId)->get();

        return view('dashboard', ['listaLibrosLeidos' => $listaLibrosLeidos]);
}
public function comprobarBoton($id)
    {
        $userId = Auth::id();
        // Realiza la consulta
        $resultado = LibrosLeidos::where('usuario_id', $userId)
        ->where('libro_id', $libroId)
        ->first();

        // Determina si el botón debe estar habilitado o no
        $deshabilitar =  true;

        // Pasa la variable a la vista
        return response()->json(['deshabilitar' => $deshabilitar]);
    }

}


