<?php

namespace App\Http\Controllers;

use App\Models\Escritor;
use Illuminate\Http\Request;
use Symfony\Component\Yaml\Escaper;

class EscritorController extends Controller
{
    public function backend()
    {
        
        $listaEscritor = Escritor::all();
        
        return view('escritorIndex', ['listaEscritor' => $listaEscritor]);
    }
    public function edit($id) {
        $escritor = Escritor::find($id);
 
        return view('escritorForm', array('escritor' => $escritor));
    }
    public function destroy($id) {
        $p = Escritor::find($id);
        $p->delete();
        return redirect()->route('escritorIndex');
    }
    public function update($id, Request $r) {
        $p = Escritor::find($id);
        $p->nombre = $r->nombre;
        $p->apellidos = $r->apellidos;
        $p->save();
        return redirect()->route('escritorIndex');
    }
    public function store(Request $r) {
        $p = new Escritor();
        $p->nombre = $r->nombre;
        $p->apellidos = $r->apellidos;
        $p->save();
        return redirect()->route('escritorIndex');
    }
    public function create() {
        
        $escritor = Escritor::all();
        
        return view('escritorForm', array( 'escritores' => $escritor));
    }
}
