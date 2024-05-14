@include ('master')

<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <div class="container">
    @if ($libro)
    <td class="imagenesLibros"><a href="{{route('show',[$libro->id])}}"><img style="height: 300px"  src="{{url('images/libros/' .$libro->imagen)}}"alt="Portada Libro"></a></td>
@else
    <p>No se encontró ningún libro para la opción seleccionada.</p>
@endif
<p></p>
<a href="{{url('/recomendador')}}">Hacer otra consulta</a>
</body>
</html>