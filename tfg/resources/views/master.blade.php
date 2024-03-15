<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
       <title>@yield('title')</title>
  
</head>


<body>

    <header class="header">
       
       
            
            
        </div>
        <a href="{{ url('/') }}">
            <img  src="{{ asset('images/Logo.png') }}" alt="Logo" class="logo"></img>
        </a>
        <h1>&nbsp;&nbsp;Libro antes que destino</h1>  
        <?php
       
          ?>
             @include('userMenu')
     
  
   <?php
  
        
        
            ?>
 
    
    </header>



</div> 


<img src="{{ asset('images/menudesplegable.png') }}" alt="Icono de menú" id="icono-menu">
<nav id="menu-desplegable">

    <a  class="opctionsdesplegable" href="{{ url('/all') }}">Todos los libros</a>
</nav>
    
    























</body>

</html>
<?php
if ($_REQUEST && isset($_GET['eliminar_sesion'])) {
    unset($_SESSION['logged_in']);
    return Redirect::to('/');
    }
?> 

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
