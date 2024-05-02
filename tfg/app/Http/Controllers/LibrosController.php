<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Genero;
use App\Models\Comentarios;
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
        // Obtener el libro específico
        $libro = Libro::findOrFail($id);
    
        // Obtener todos los comentarios asociados con el libro
        $comentarios = Comentarios::where('libro_id', $id)->get();
    
        return view('show', compact('libro', 'comentarios'));
    }

    public function carrousel()
    {
        $libros = Libro::all();
        $listaGeneros = Genero::all();
        return view('carrousel', ['libros' => $libros,'listaGeneros' => $listaGeneros]);
    }
   
  
}
