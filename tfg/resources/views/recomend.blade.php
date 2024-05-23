@include ('header')

<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
<div class="container d-flex justify-content-center align-items-center centered-div">
    @if ($libro)
    <td class="imagenesLibros"><a href="{{route('show',[$libro->id])}}"><img style="height: 300px"  src="{{url('images/libros/' .$libro->imagen)}}" alt="Portada Libro" onerror="this.src='{{ url('images/libros/WIP.png') }}'"></a></td>
@else
    <p>No se encontró ningún libro para la opción seleccionadas.</p>
@endif
</div>
<a class="d-flex justify-content-center align-items-center centered-div" href="{{url('/recomendador')}}">Hacer otra consulta</a>
</body>
</html>