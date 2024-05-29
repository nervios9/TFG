<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function indexBiblio(){
        // Obtener todos los usuarios con el rol de bibliotecario
        $bibliotecarios = User::role('bibliotecario')->get();

        // Pasar los usuarios a la vista
        return view('biblioIndex', compact('bibliotecarios'));
    }
    
    public function biblioDestroy($id)
    {
        $user = User::findOrFail($id);

        if ($user->hasRole('bibliotecario')) {
            $user->delete();
            return redirect()->route('biblioIndex')->with('success', 'Bibliotecario eliminado con éxito.');
        }

        return redirect()->route('biblioIndex')->with('error', 'No se puede eliminar este usuario.');
    }
    public function biblioCreate() {
        
        $bibliotecarios = User::all();
        return view('biblioForm', array('bibliotecarios' => $bibliotecarios));
    }

    public function biblioStore(Request $request)
    {
      
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $user->assignRole('bibliotecario');

        return redirect()->route('biblioIndex')->with('success', 'Bibliotecario creado con éxito.');
    }
    public function biblioUpdate($id, Request $r) {
        $p = User::find($id);
        $p->name = $r->name;
        $p->email = $r->email;
        $p->password = $r->password;
        $p->save();
        return redirect()->route('biblioIndex');
    }
    public function biblioEdit($id) {
        $bibliotecario = User::findOrFail($id);

        if (!$bibliotecario->hasRole('bibliotecario')) {
            return redirect()->route('abiblioForm')->with('error', 'Usuario no tiene rol de bibliotecario.');
        }

        return view('biblioForm', compact('bibliotecario'));
    }


    public function indexUser()
    {
        // Obtener todos los usuarios con el rol de bibliotecario
        $users = User::whereDoesntHave('roles', function($query) {
            $query->whereIn('name', ['admin', 'bibliotecario']);
        })->get();

        // Pasar los usuarios a la vista
        return view('userIndex', compact('users'));
    }
    public function userDestroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('biblioIndex')->with('success', 'Usuario eliminado con éxito.');
    
    }
    public function userCreate() {
        
        $users = User::all();
        return view('userForm', array('users' => $users));
    }

    public function userStore(Request $request)
    {
      
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

       

        return redirect()->route('userIndex')->with('success', 'Usuario creado con éxito.');
    }
    public function userUpdate($id, Request $r) {
        $p = User::find($id);
        $p->name = $r->name;
        $p->email = $r->email;
        $p->password = $r->password;
        $p->save();
        return redirect()->route('userIndex');
    }
    public function userEdit($id) {
        $bibliotecario = User::findOrFail($id);

     return view('userForm', compact('user'));
    }
 

















}



