<?php

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

Route::get('/', function () {return view('master');});

Route::get('config{id}', 'UsuariosController@')->name('config');
Route::get('read', function () {return view('read');});
Route::get('/all','LibrosController@index');
Route::get('/show{id}', 'LibrosController@show')->name('show');



Route::get('/registrar', 'UsuariosController@crearUsuarioForm');
Route::post('/registrar', 'UsuariosController@guardarUsuario');
Route::get('/login', 'AuthController@showLoginForm')->name('login');
Route::post('/login', 'AuthController@login');