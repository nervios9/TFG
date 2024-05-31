<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LibrosLeidos;
use App\Models\Libro;
use Illuminate\Support\Facades\Auth;
class LibrosLeidosController extends Controller
{
    public function librosLeidos(Request $request)
    {
        $nuevoLibroLeido = new LibrosLeidos();
        $nuevoLibroLeido->libro_id = $request->input('libro_id');
        $nuevoLibroLeido->usuario_id = $request->input('usuario');
        $nuevoLibroLeido->save();
    
        return redirect()->back()->with('perfecto', 'Libro leído agregado');
    }
    
    public function eliminarLibroLeido(Request $request)
    {
        $libroLeido = LibrosLeidos::where('libro_id', $request->input('libro_id'))
            ->where('usuario_id', $request->input('usuario'))
            ->first();
    
        if ($libroLeido) {
            $libroLeido->delete();
            return redirect()->back()->with('perfecto', 'Libro leído eliminado');
        }
    
        return redirect()->back()->with('error', 'No se encontró el libro leído para eliminar');
    }
   
    public function leidos()
    {
        $userId = Auth::id();
        $listaLibrosLeidos = LibrosLeidos::where('usuario_id', $userId)->get();

        return view('dashboard', ['listaLibrosLeidos' => $listaLibrosLeidos]);
}


}