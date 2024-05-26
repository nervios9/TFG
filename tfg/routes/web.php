<?php
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\LibrosLeidosController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/librosIndex', 'librosController@backend')->name('librosIndex');
Route::get('/librosEdit{id}', 'librosController@edit')->name('librosEdit');
Route::patch('librosUpdate/{libros}', 'LibrosController@update')->name('librosUpdate');
Route::get('librosCreate', 'librosController@create')->name('librosCreate');
Route::post('librosStore/{libros?}', 'LibrosController@store')->name('librosStore');
Route::delete('/librosDestroy{libros}', 'librosController@destroy')->name('librosDestroy');

Route::get('/escritorIndex', 'EscritorController@backend')->name('escritorIndex');
Route::get('/escritorEdit{id}', 'EscritorController@edit')->name('escritorEdit');
Route::patch('escritorUpdate/{escritor}', 'EscritorController@update')->name('escritorUpdate');
Route::get('escritorCreate', 'EscritorController@create')->name('escritorCreate');
Route::post('escritorStore/{escritor?}', 'EscritorController@store')->name('escritorStore');
Route::delete('/escritorDestroy{escritor}', 'EscritorController@destroy')->name('escritorDestroy');

Route::get('/generoIndex', 'GeneroController@backend')->name('generoIndex');
Route::get('/generoEdit{id}', 'GeneroController@edit')->name('generoEdit');
Route::patch('generoUpdate/{genero}', 'GeneroController@update')->name('generoUpdate');
Route::get('generoCreate', 'GeneroController@create')->name('generoCreate');
Route::post('generosStore/{genero?}', 'GeneroController@store')->name('generosStore');
Route::delete('/generoDestroy{genero}', 'GeneroController@destroy')->name('generoDestroy');

Route::get('/backend', function () {return view('backend');})->name('backend');

Route::post('/enviarDatos', 'ComentariosController@recibirDatos')->name('enviarDatos');
Route::get('/registrar', 'UsuariosController@crearUsuarioForm');
Route::post('/registrar', 'UsuariosController@guardarUsuario');
Route::get('/login', 'AuthController@showLoginForm')->name('login');
Route::post('/login', 'AuthController@login');

Route::delete('eliminarComentario/{id}', 'ComentariosController@eliminarComentario')->name('eliminarComentario');
Route::patch('/comentarios/{id}',  'ComentariosController@update')->name('update');


Route::get('userIndex', 'UserController@indexUser')->name('userIndex');
Route::delete('/userDestroy{usuario}', 'UserController@userDestroy')->name('userDestroy');
Route::get('userCreate', 'UserController@userCreate')->name('userCreate');
Route::post('userStore', 'UserController@userStore')->name('userStore');
Route::patch('userUpdate/{usuario}', 'UserController@userUpdate')->name('userUpdate');
Route::get('/userEdit{id}', 'UserController@userEdit')->name('userEdit');



Route::get('biblioIndex', 'UserController@indexBiblio')->name('biblioIndex');
Route::delete('/biblioDestroy{bibliotecario}', 'UserController@biblioDestroy')->name('biblioDestroy');
Route::get('biblioCreate', 'UserController@biblioCreate')->name('biblioCreate');
Route::post('biblioStore', 'UserController@biblioStore')->name('biblioStore');
Route::patch('biblioUpdate/{bibliotecario}', 'UserController@biblioUpdate')->name('biblioUpdate');
Route::get('/biblioEdit{id}', 'UserController@biblioEdit')->name('biblioEdit');

require __DIR__.'/auth.php';