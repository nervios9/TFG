<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibrosController extends Controller
{
    public function index()
    {
        $listaLibros = Libro::all();
        return view('all', ['listaLibros' => $listaLibros]);
    }
    public function show($id)
    {
        $p = Libro::find($id);
        $data['libros'] = $p;
        return view('show', $data);
    }
}
