<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap-4.0.0-dist/css/bootstrap.css') }}">
       <title>@yield('title')</title>
  
</head>


<body>
    @include('header')
    <?php
     
    if (!isset($_SESSION['logged_in'])) {
        ?>
        <a class="login" href="{{ asset('login.php') }}">Iniciar Sesion</a>
        <a  class="register" href="{{ asset('register.php') }}">Registrarse</a>
    
       <?php
    }else{
        ?>
       
    <script src="/bootstrap-4.0.0-dist/js/bootstrap.js"></script>
    <?php
    }
?>
    
</body>   
