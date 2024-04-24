<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Genero;
use Illuminate\Support\Facades\DB;
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
        
        $respuesta = $request->input('opcion');
        $listaLibros = DB::table('libros')->where('genero_id', $respuesta)
                                          ->orWhere('subgenero_id',$respuesta)->get();
      
        
        return view('buscador', ['listaLibros' => $listaLibros,]);
    }
    

    public function show($id)
    {
        $libro = Libro::findOrFail($id);
     
        return view('show', compact('libro'));
    }

    public function carrousel()
    {
        $libros = Libro::all();
        $listaGeneros = Genero::all();
        return view('carrousel', ['libros' => $libros,'listaGeneros' => $listaGeneros]);
    }
  
}
