<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentarios;
class ComentariosController extends Controller
{
    public function recibirDatos(Request $request){
        $request->validate([
            'nombre' => 'required|string|max:255',
            'comentario' => 'required|string|max:255',
        ]);
        // Crear un nuevo comentario
        $nuevoComentario = new Comentarios();
        $nuevoComentario->comentario = $request->input('comentario');
        $nuevoComentario->usuario_id = $request->input('usuario');
        $nuevoComentario->libro_id = $request->input('libro_id');
        $nuevoComentario->save();
        return redirect()->back()->with('perfecto', 'Comentario agregado');
       
     ;
        
    }
}
