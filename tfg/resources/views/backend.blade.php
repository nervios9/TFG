@include('header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Bonita</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .centrado {
            text-align: center;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Bienvenido</h1>
    <div class="centrado">
        <form action="{{ route('librosIndex') }}" method="GET">
            @csrf
            <button type="submit" class="btn">Libros</button>
        </form>
        <form action="{{ route('escritorIndex') }}" method="GET">
            @csrf
            <button type="submit" class="btn">Escritores</button>
        </form>
        <form action="{{ route('generoIndex') }}" method="GET">
            @csrf
            <button type="submit" class="btn">Géneros</button>
        </form>
    </div>
</div>