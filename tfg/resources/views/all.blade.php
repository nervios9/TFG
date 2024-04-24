@include ('master')

<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <div class="container">
        <h1>Catalogo de Libros</h1>
    <form method="GET" action="{{ route('buscador') }}">
            @csrf
        <select name="opcion">
            @foreach($listaGeneros as $genero)
                <option value="{{ $genero->id }}">{{ $genero->genero }}</option>
            @endforeach
        </select>
        <button type="submit">Buscar</button>
    </form>
        <table>
            @foreach($listaLibros ->chunk(5) as $fila)
                <tr>
                    @foreach($fila as $libros)
                        <td class="imagenesLibros"><a href="{{route('show',[$libros->id])}}"><img style="height: 300px"  src="{{url('images/libros/' .$libros->imagen)}}"alt="Portada Libro"></a></td>
                        
                    @endforeach
                </tr>
                
            @endforeach
        </table>
      
       