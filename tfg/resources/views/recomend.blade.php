@include ('header')
<style>
    .libros{
          /* El div ocupará el 70% del ancho del viewport */
            height: 30vw; /* Altura de ejemplo */
             /* Color de fondo de ejemplo */
            margin: 0 auto; /* Centrar horizontalmente */
    }
</style>
<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
<div class=" libros container d-flex justify-content-center align-items-center centered-div">
    @if ($libro)
    <td class="imagenesLibros"><a href="{{route('show',[$libro->id])}}"><img style="height: 300px"  src="{{url('images/libros/' .$libro->imagen)}}" alt="Portada Libro" onerror="this.src='{{ url('images/libros/WIP.png') }}'"></a></td>
@else
    <p>No se encontró ningún libro para la opción seleccionadas.</p>
@endif
</div>
<a id="consulta" class="d-flex justify-content-center align-items-center centered-div" href="{{url('/recomendador')}}">Hacer otra consulta</a>

@include('footer')
3