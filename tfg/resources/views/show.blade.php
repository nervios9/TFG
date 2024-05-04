@include ('header')

<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
@section('show', 'info peliculas')
@section( 'content')
<div class="container">
   
<h1>{{ $libro->nombre }}</h1>


    <img style="height: 400px" id="imagenesPeliculas" src="{{url('images/libros/' .$libro->imagen)}}"alt="portada libro">


   

       
<p>Autor: {{ $libro->escritor->nombre }} {{ $libro->escritor->apellidos }}</p>
   
<p>Genero: {{$libro ->genero->genero}}</p>
  
<p>Fecha de estreno: {{ $libro->fecha_salida }}</p>
<p>Paginas: {{ $libro->paginas}}</p>

<p>Synopsis: {{ $libro->synopsis}}</p>

<form method="POST" action="{{ route('librosLeidos') }}">
    @csrf
    <input type="checkbox" name="leido" {{ $libro->librosLeidos(Auth::user()) ? 'checked disabled' : '' }}>
    @if ($libro->librosLeidos(Auth::user()))
        <span>Libro Leído</span>
    @else
        <label for="completed">Marcar como leído</label>
    @endif
    <input type="hidden" name="usuario" value="{{ Auth::user()->id }}">
    <input type="hidden" name="libro_id" value="{{ $libro->id }}">
    <button type="submit" {{ $libro->LibrosLeidos(Auth::user()) ? 'disabled' : '' }}>Guardar</button>
</form>

<form action="{{ route('enviarDatos') }}" method="POST">
    @csrf
    <div class="input-row">
        <input type="hidden" name="comment_id" id="post" placeholder="Nombre" />
        <label for="nombre" class="form-label">Usuario:</label> 
        <input class="form-control" type="text" name="nombre" id="nombre" readonly value= {{ Auth::user()->name }} required/>
    </div>
    <div class="input-row">
        <label for="comme" class="form-label">Comentario:</label>
            <p class="emoji-picker-container">
              <textarea rows="6" class="form-control" 
              type="text" name="comentario" id="comentario" placeholder="Agregue su comentario" required></textarea>
            </p>
        </div>
        <input type="hidden" name="usuario" value={{ Auth::user()->id }}>
        <input type="hidden" name="libro_id" value={{$libro->id}}>
    <button type="submit">Enviar</button>
</form>


<h2>Comentarios:</h2>
<ul>
    @foreach ($comentarios as $comentario)
        <li>
           
         {{--  {{ $comentario->users->name }} --}}
            {{ $comentario->comentario }} - 
        </li>
    @endforeach
</ul>


</div>
@endsection
@yield('content')
