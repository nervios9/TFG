<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Genero;
use App\Models\Comentarios;
use App\Models\Escritor;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
class LibrosController extends Controller
{
    public function index()
    {
        //$listaLibros = Libro::orderBy('nombre', 'asc')->get();
        $listaLibros = Libro::all();
        $listaGeneros = Genero::all();
        return view('all', ['listaLibros' => $listaLibros,'listaGeneros' => $listaGeneros]);
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
                     ->limit(15)
                     ->get();
// Obtener el número total de escritores
$totalEscritores = Escritor::count();

// Generar un ID de escritor aleatorio entre 1 y el número total de escritores
$escritorId = rand(1, $totalEscritores);

// Obtener el escritor con el ID aleatorio
$resul = Escritor::find($escritorId);

// Verificar si se encontró un escritor con el ID aleatorio
if ($resul) {
    // Concatenar el nombre y los apellidos del escritor
    $nombre = $resul->nombre . ' ' . $resul->apellidos;

    // Guardar el nombre en la sesión
    Session::put('nombre', $nombre);
} else {
    // Si no se encuentra un escritor con el ID aleatorio, mostrar un mensaje de error
    Session::flash('error', 'No se encontró ningún escritor con el ID aleatorio.');
}

    //$escritorId = 2;

$elementos2 = Libro::where('escritor_id', $escritorId)->get();
        return view('master', ['elementos' => $elementos,'elementos2' => $elementos2]);
    }
  

    public function backend()
    {
        
        $listaLibros = Libro::all();
        
        return view('librosIndex', ['listaLibros' => $listaLibros]);
    }
    public function edit($id) {
        $libros = Libro::find($id);
        $escritor = Escritor::all();
        $generos = Genero::all();
        return view('librosForm', array('libros' => $libros, 'escritor' => $escritor,'generos' => $generos));
    }
    public function destroy($id) {
        $p = Libro::find($id);
        $p->delete();
        return redirect()->route('librosIndex');
    }
    public function update($id, Request $r) {
        $p = Libro::find($id);
        $p->nombre = $r->nombre;
        $p->fecha_salida = $r->fecha_salida;
        $p->paginas = $r->paginas;
        $p->imagen = $r->imagen;
        $p->synopsis = $r->synopsis;
        $p->genero_id = $r->genero_id;
        $p->escritor_id = $r->escritor_id;
        $p->subgenero_id =$r->subgenero_id;
        $p->save();
        return redirect()->route('librosIndex');
    }
    public function store(Request $r) {
        $p = new Libro();
        $p->nombre = $r->nombre;
        $p->fecha_salida = $r->fecha_salida;
        $p->paginas = $r->paginas;
        $p->imagen = $r->imagen;
        $p->synopsis = $r->synopsis;
        $p->genero_id = $r->genero_id;
        $p->escritor_id = $r->escritor_id;
        $p->subgenero_id =$r->subgenero_id;
        $p->save();
        return redirect()->route('librosIndex');
    }
    public function create() {
        
        $escritor = Escritor::all();
        $generos = Genero::all();
        return view('librosForm', array( 'escritor' => $escritor,'generos' => $generos));
    }
}
