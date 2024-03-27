<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Genero;

class LibrosController extends Controller
{
    public function index()
    {
        $listaLibros = Libro::all();
        $listaGeneros = Genero::all();
        return view('all', ['listaLibros' => $listaLibros,'listaGeneros' => $listaGeneros]);
    }
    public function find(Request $request)
    {
        
        echo $request->id;
        $listaLibros = Libro::where('genero_id', $request->id)->get("id");
        
        return view('buscador', ['listaLibros' => $listaLibros,]);
    }
    

    public function show($id)
    {
        $libros = Libro::findOrFail($id);
        $libros->load('escritor');
    
        return view('show', compact('libros'));
    }
}
