<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap-4.0.0-dist/css/bootstrap.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap-4.0.0-dist/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Solo usa una versión de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Incluye scripts de Bootstrap y dependencias -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>@yield('title')</title>
</head>
<style>
    #titulo {
        position: absolute;
        top: 6%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        margin: 0;
        margin-top: 30px;
        padding: 20px;
        border-radius: 8px;
    }

    .botones {
        display: fixed;
        margin-top: -30px;
        margin-left: 700px;
    }

    .boton {
        margin-left: 10px;
    }
</style>
<script src="/bootstrap-4.0.0-dist/js/bootstrap.js"></script>
<header class="header2 w-100 d-flex flex-column flex-md-row justify-content-between align-items-center fixed-top">
    <a href="{{ url('/') }}">
        <img src="{{ asset('images/Logo.png') }}" alt="Logo" class="logo"></img>
    </a>

    <div id="contenedor">
        <h1 id="titulo">Libro antes que destino</h1>
        <div class="botones">
            <button onclick="translatePage('es')" class="btn btn-primary boton">ES</button>
            <button onclick="translatePage('en')" class="btn btn-secondary boton">EN</button>
        </div>
    </div>
    <div id="userZone" style="width: 200px;"> <!-- Establece un ancho fijo para evitar cambios en el tamaño -->
        <div class="d-flex justify-content-end min-h-screen bg-dots-darker bg-center  dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">          
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                <a id="user" href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Zona de Usuario</a> 
            </div>
        </div>
    </div>
</header>

</div> 

<br>
<br>
<br>
<nav class="navbar navbar-expand-lg menu-principal" style=" color:black; margin: 20px auto; max-width: 600px;">
    <div class="container-fluid d-flex align-items-center gap-4">
        <div class="navbar-nav list-unstyled d-flex align-items-center gap-3">
            <a class="nav-link" id="inicio" href="{{ url('/') }}">Inicio</a>
            <a class="nav-link" id="all" href="{{ url('/all') }}">Todos los libros</a>
            <a class="nav-link" id="recommend" href="{{ url('/recomendador') }}">Recomendador de libros</a>
         @role('admin')
             <a class="nav-link"  href="{{ url('/backend') }}">Backend</a>
         @endrole
        </div>
    </div>
</nav>

<script>
   
    function translatePage(language) {
        const translations = {
            'es': {
                'consulta':'Hacer otra consulta',
                'inicio':'Inicio',
                'all':'Todos los libros',
                'recommend':'Recomendador de libros',              
                'enviar':'Enviar',
                'comentario':'Comentario',
                'comentarios':'Comentarios',
                'usuario':'Usuario:',
                'miBoton':'Añadir libro leído',
                'autor':'Autor: ',
                'genero':'Genero: ',
                'fecha':'Fecha de publicación:',
                'paginas':'Paginas: ',
                'titulo':'Libro antes que destino',
                'user':'Zona de Usuario',
                'carrousel2':'Autor destacado: {{ Session::get('nombre') }} {{ Session::get('apellidos') }}',
                'carrousel1': 'Recien salidos de la Imprenta',
                'catalogo':'Catalogo de libros',
                'submit': 'Buscar',
                'mostrarMas':'Mostrar Más'
            },
            'en': {
                'consulta':'Do it again',
                'inicio':'Home',
                'all':'All books',
                'recommend':'Recommendations',   
                'enviar':'Send',
                'comentario':'Comments',
                'comentarios':'Comments',
                'usuario':'User:',
                'miBoton':'Add readed book',
                'autor':'Writter: ',
                'genero':'Genre: ',
                'fecha':'Date of release: ',
                'paginas':'Pages: ',
                'user':'User zone',
                'carrousel2': 'Featured author:  {{ Session::get('nombre') }} {{ Session::get('apellidos') }}',
                'carrousel1': 'New Releases:',
                'catalogo': 'All Books',
                'submit': 'Submit',
                'mostrarMas':'Show more'
            }
        };
        // Actualizar el texto en la página según el idioma seleccionado
        Object.keys(translations[language]).forEach(key => {
            const element = document.getElementById(key);
            if (element) {
                element.textContent = translations[language][key];
            }
        });
        return false; // Evita que la página se desplace al hacer clic en el botón
    }
</script>