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
        $nuevoComentario->user_id = $request->input('usuario');
        $nuevoComentario->libro_id = $request->input('libro_id');
        $nuevoComentario->save();
        return redirect()->back()->with('perfecto', 'Comentario agregado');
 }
 public function eliminarComentario($id)
{
    $comentario = Comentarios::findOrFail($id);

    // Verificar si el usuario autenticado tiene permiso para eliminar el comentario
    if ($comentario->user_id == auth()->user()->id) {
        $comentario->delete();
        return redirect()->back()->with('success', 'Comentario eliminado correctamente.');
    } else {
        return redirect()->back()->with('error', 'No tienes permiso para eliminar este comentario.');
    }
}
public function update(Request $request, $id)
{
    $comentario = Comentarios::findOrFail($id);
    $this->authorize('update', $comentario); // Asegúrate de que el usuario tenga permiso para actualizar el comentario

    $comentario->comentario = $request->input('comentario');
    $comentario->save();

    return redirect()->back()->with('success', 'Comentario actualizado correctamente.');
}










}
