@include ('header')

<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
@section('show', 'info peliculas')
@section( 'content')
<div class="container">
   
<h1>{{ $libros->nombre }}</h1>


    <img style="height: 400px" id="imagenesPeliculas" src="{{url('images/libros/' .$libros->imagen)}}"alt="portada libro">


   

    
   

  
<p>Fecha de estreno: {{ $libros->fecha_salida }}</p>
<p>Paginas: {{ $libros->paginas}}</p>

<p>Synopsis: {{ $libros->synopsis}}</p>


</div>
@endsection
@yield('content')
