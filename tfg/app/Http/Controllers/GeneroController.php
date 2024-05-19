<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use GMP;
use Illuminate\Http\Request;

class GeneroController extends Controller
{
    public function backend()
    {
        
        $listaGeneros = Genero::all();
        
        return view('generoIndex', ['listaGeneros' => $listaGeneros]);
    }
    public function edit($id) {
       
        $generos = Genero::find($id);
        return view('generoForm', array('genero' => $generos));
    }
    public function destroy($id) {
        $p = Genero::find($id);
        $p->delete();
        return redirect()->route('generoIndex');
    }
    public function update($id, Request $r) {
        $p = Genero::find($id);
        $p->genero = $r->genero;
        $p->save();
        return redirect()->route('generoIndex');
    }
    public function store(Request $r) {
        $p = new Genero();
        $p->genero = $r->genero;
        $p->save();
        return redirect()->route('generoIndex');
    }
    public function create() {
        
        $generos = Genero::all();
        return view('generoForm', array('genero' => $generos));
    }
}

