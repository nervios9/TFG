@include ('header')

<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
@section('show', 'info peliculas')
@section( 'content')
<div class="container">
   
<h1>{{ $libro->nombre }}</h1>


    <img style="height: 400px" id="imagenesPeliculas" src="{{url('images/libros/' .$libro->imagen)}}"alt="portada libro">


   

       
    <p>Autor {{ $libro->escritor->nombre }}</p>
   
<p>Genero {{$libro ->genero->genero}}</p>
  
<p>Fecha de estreno: {{ $libro->fecha_salida }}</p>
<p>Paginas: {{ $libro->paginas}}</p>

<p>Synopsis: {{ $libro->synopsis}}</p>


</div>
@endsection
@yield('content')
