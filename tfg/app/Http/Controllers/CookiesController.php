<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class CookiesController extends Controller
{
    public function mostrarVista()
{
    if (!Session::has('cookies_accepted')) {
        return view('master');
    }

    return view('salida');
}
    public function aceptarCookies()
    {
        $response = new Response(view('master')); // Cambia 'home' por la vista a la que deseas redirigir después de aceptar las cookies
        $response->withCookie(cookie('cookies_accepted', true, 60*24*365)); // La cookie expirará en 1 año
    
        return $response;
    }
}
