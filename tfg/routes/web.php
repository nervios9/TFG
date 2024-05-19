<?php
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\LibrosLeidosController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/','LibrosController@carrousel',function (){
return view('master');
})->middleware(['auth'])->name('master');



Route::get('/dashboard','LibrosLeidosController@leidos', function() {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/show/{id}', function ($id) {
    $librosController = new LibrosController();
    return $librosController->show($id);
});


Route::get('/show/{id}', function ($id) {
    $librosLeidosController = new LibrosLeidosController();
    return $librosLeidosController->comprobarBoton($id);
})->name('show');

Route::get('/show{id}', 'LibrosController@show')->name('show');

Route::get('config{id}', 'UsuariosController@')->name('config');
Route::get('read', function () {return view('read');});
Route::get('/all','LibrosController@index');
Route::get('/backend','LibrosController@backend')->name('backend');
Route::get('/buscador','LibrosController@find')->name('buscador');
Route::get('/recomend','LibrosController@recomend')->name('recomend');
Route::get('/recomendador','LibrosController@recomendador')->name('recomendador');
//Route::post('/eliminarLibrosLeidos', 'LibrosLeidosController@eliminarLibrosLeidos')->name('eliminarLibrosLeidos');
Route::post('/librosLeidos', 'LibrosLeidosController@librosLeidos')->name('librosLeidos');
Route::post('/enviarDatos', 'ComentariosController@recibirDatos')->name('enviarDatos');
Route::get('/registrar', 'UsuariosController@crearUsuarioForm');
Route::post('/registrar', 'UsuariosController@guardarUsuario');
Route::get('/login', 'AuthController@showLoginForm')->name('login');
Route::post('/login', 'AuthController@login');
require __DIR__.'/auth.php';