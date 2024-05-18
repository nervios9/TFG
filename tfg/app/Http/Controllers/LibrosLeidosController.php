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
public function eliminarLibrosLeidos(Request $request){
       

    $nuevoLibroLeido = new LibrosLeidos();
    $nuevoLibroLeido ->libro_id = $request->input('libro_id');
    $nuevoLibroLeido ->usuario_id = $request->input('usuario');
    $nuevoLibroLeido ->save();

    
    return redirect()->back()->with('perfecto', 'Libro leido agregado');
}


