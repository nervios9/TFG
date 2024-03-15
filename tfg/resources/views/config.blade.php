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
       
        <div class="dropdown">
            <img  src="{{ asset('images/menudesplegable.png') }}" alt="iconomenudesplegable" class="dropdown-img" tabindex="0" ></img>
            
            <div class="dropdown-menu">
                <a href="#">Opción 1</a><br>
                <a href="#">Opción 2</a><br>
                <a href="#">Opción 3</a>
            </div>
        </div>
        <a href="{{ url('/') }}">
            <img  src="{{ asset('images/Logo.png') }}" alt="Logo" class="logo"></img>
        </a>
        <h1>&nbsp;&nbsp;Libroteca</h1>  
        <?php
       
          ?>
             @include('userMenu')
     
  
   <?php
  
        
        
            ?>
 
    
    </header>



</div> 

<h1>Configuracionde usuario</h1>























</body>

</html>
<?php
if ($_REQUEST && isset($_GET['eliminar_sesion'])) {
    unset($_SESSION['logged_in']);
    return Redirect::to('/');
    }
?> 
