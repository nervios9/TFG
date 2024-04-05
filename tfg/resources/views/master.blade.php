<?php session_start();?>

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


<body>
 
    @include('header')
    @include('partials.alerta_cookies')
    <?php
     
    if (!isset($_SESSION['logged_in'])) {
        ?>
       
    
       <?php
    }else{
        ?>
       
    <script src="/bootstrap-4.0.0-dist/js/bootstrap.js"></script>
    <?php
    }
?>
    
</body>   
