

<!DOCTYPE html>
<html lang="en">
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
       <title>@yield('title')</title>
  
</head>

<script src="/bootstrap-4.0.0-dist/js/bootstrap.js"></script>
<header class="header w-100 d-flex flex-column flex-md-row justify-content-between align-items-center">
       
       
            
            
        </div>
        <a href="{{ url('/') }}">
            <img  src="{{ asset('images/Logo.png') }}" alt="Logo" class="logo"></img>
        </a>
        <h1 id="titulo">&nbsp;&nbsp;Libro antes que destino</h1>  
        <?php
       
          ?>
             @include('userMenu')
     
  
   <?php
  
        
        
            ?>
 
    
    </header>

</div> 


<img src="{{ asset('images/menudesplegable.png') }}" alt="Icono de menú" id="icono-menu">
<nav id="menu-desplegable">

    <a  class="opctionsdesplegable" href="{{ url('/all') }}">Todos los libros</a><br>
    <a  class="opctionsdesplegable" href="{{ url('/recomendador') }}">Recomendador de libros</a><br>
    <a  class="opctionsdesplegable" href="{{ url('/backend') }}">Backend</a><br>
   {{-- <a class="opctionsdesplegable" href="{{ url('/mostrarLeidos', [Auth::user()->id]) }}">Libros Leidos</a><br>--}}
</nav>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const iconoMenu = document.getElementById('icono-menu');
        const menuDesplegable = document.getElementById('menu-desplegable');
        iconoMenu.addEventListener('click', function() {
            // Si el menú está oculto, mostrarlo; si está visible, ocultarlo
            if (menuDesplegable.style.left === '-250px') {
                menuDesplegable.style.left = '0';
            } else {
                menuDesplegable.style.left = '-250px';
            }
        });
    });
</script>

<script>
    function translatePage(language) {
        const translations = {
            'es': {
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
                'mostrarMas':'Show more'            }
        };
        // Actualizar el texto en la página según el idioma seleccionado
        Object.keys(translations[language]).forEach(key => {
            const element = document.getElementById(key);
            if (element) {
                element.textContent = translations[language][key];
            }
        });
    }
</script>