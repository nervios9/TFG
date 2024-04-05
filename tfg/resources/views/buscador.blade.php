@include ('master')

<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <div class="container">
        <h1>Buscador:</h1>
        <a href="{{url('/all')}}">Hacer otra consulta</a>
        <table>
            @foreach($listaLibros ->chunk(5) as $fila)
                <tr>
                    @foreach($fila as $libros)
                        <td class="imagenesLibros"><a href="{{route('show',[$libros->id])}}"><img style="height: 300px"  src="{{url('images/libros/' .$libros->imagen)}}"alt="Portada Libro"></a></td>
                        
                    @endforeach
                </tr>
                
            @endforeach
        </table>
        <br><br>
        <a href="{{url('/all')}}">Hacer otra consulta</a>
        </div>
