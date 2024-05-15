@include ('header')

<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
<div class="container d-flex justify-content-center align-items-center centered-div">
        <h1>Catalogo de Libros</h1>
    <form method="GET" action="{{ route('buscador') }}">
            @csrf
    </div>
            <div class="container d-flex justify-content-center align-items-center centered-div">
        <select name="opcion">
            @foreach($listaGeneros as $genero)
                <option value="{{ $genero->id }}">{{ $genero->genero }}</option>
            @endforeach
        </select>
        <button type="submit">Buscar</button>
    </form>
</div>
    <div class="container">
        <table>
            @foreach($listaLibros ->chunk(5) as $fila)
                <tr>
                    @foreach($fila as $libros)
                        <td class="imagenesLibros"><a href="{{route('show',[$libros->id])}}"><img style="height: 300px"  src="{{url('images/libros/' .$libros->imagen)}}"alt="Portada Libro"></a></td>
                        
                    @endforeach
                </tr>
                
            @endforeach
        </table>
      
    </div>