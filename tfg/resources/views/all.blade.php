@extends ('master')

<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <div class="container">
        <h1>Catalogo de Libros</h1>
        <table>
            @foreach($listaLibros ->chunk(3) as $fila)
                <tr>
                    @foreach($fila as $libros)
                        <td><a href="{{route('show',[$libros->id])}}"><img style="height: 300px" id="imagenesLibros" src="{{url('images/' .$libros->imagen)}}"alt="Portada Libro"></a></td>
                        
                    @endforeach
                </tr>
                
            @endforeach
        </table>
        </div>
