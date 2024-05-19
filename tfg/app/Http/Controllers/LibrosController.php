<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Genero;
use App\Models\Comentarios;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class LibrosController extends Controller
{
    public function index()
    {
        //$listaLibros = Libro::orderBy('nombre', 'asc')->get();
        $listaLibros = Libro::all();
        $listaGeneros = Genero::all();
        return view('all', ['listaLibros' => $listaLibros,'listaGeneros' => $listaGeneros]);
    }
    public function backend()
    {
        //$listaLibros = Libro::orderBy('nombre', 'asc')->get();
        $listaLibros = Libro::all();
        
        return view('backend', ['listaLibros' => $listaLibros]);
    }
    public function recomendador()
    {
       
        $listaLibros = Libro::all();
        $listaGeneros = Genero::all();
        return view('recomendador', ['listaLibros' => $listaLibros,'listaGeneros' => $listaGeneros]);
    }
    public function find(Request $request)
    {
        
        $respuesta = $request->input('opcion');
        $listaLibros = DB::table('libros')->where('genero_id', $respuesta)
                                          ->orWhere('subgenero_id',$respuesta)->get();
      
        
        return view('buscador', ['listaLibros' => $listaLibros,]);
    }



    public function recomend(Request $request)
    {
        
        $respuesta = $request->input('opcion');
        $libroAleatorio = DB::table('libros')
        ->where('genero_id', $respuesta)
        ->orWhere('subgenero_id', $respuesta)
        ->inRandomOrder()  // Ordenar de manera aleatoria
        ->first();
        return view('recomend', ['libro' => $libroAleatorio,]);
    }
    

    public function show($id)
    {
        // Obtener el libro específico
        $libro = Libro::findOrFail($id);
    
        // Obtener todos los comentarios asociados con el libro
        $comentarios = Comentarios::where('libro_id', $id)->get();
    
        return view('show', compact('libro', 'comentarios'));
    }

    public function carrousel(){

    

// Obtener la fecha actual
$fechaActual = Carbon::now();

// Consulta utilizando Eloquent para obtener los 5 primeros elementos ordenados por la diferencia entre la fecha en la tabla y la fecha actual
$elementos = Libro::orderByRaw('ABS(DATEDIFF(fecha_salida, ?))', [$fechaActual])
                     ->limit(5)
                     ->get();


    $escritorId = 2;

$elementos2 = Libro::where('escritor_id', $escritorId)->get();
        return view('master', ['elementos' => $elementos,'elementos2' => $elementos2]);
    }
  
  
}
