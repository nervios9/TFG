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

    @include('header')

<h1>Configuracion de usuario</h1>























</body>

</html>
<?php
if ($_REQUEST && isset($_GET['eliminar_sesion'])) {
    unset($_SESSION['logged_in']);
    return Redirect::to('/');
    }
?> 
