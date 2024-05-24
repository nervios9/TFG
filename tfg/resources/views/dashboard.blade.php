<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
<link rel="stylesheet" href="{{ asset('bootstrap-4.0.0-dist/css/bootstrap.css') }}">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" >
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" ></script>
<script src="{{ asset('js/app.js') }}" defer></script>
@include('header')

<style>

table {
        width: 60%;
        text-align: center;
        border-collapse: collapse; /* Colapsar los bordes de las celdas */
    }
    .imagenesLibros img {
        display: block;
        margin: 0 auto;
    }
    .imagenesLibros {
        padding: 10px; /* Espaciado horizontal entre las celdas */
        
    }
</style>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100 d-flex align-items-center justify-content-center">
                
                <table>
                    <td colspan="5" class="text-center">{{ __("Libros leídos:") }}</td>
                    @foreach($listaLibrosLeidos->chunk(5) as $filaIndex => $fila)
                    <tr class="filaLibros {{ $filaIndex >= 2 ? 'd-none' : '' }}">
                            @foreach($fila as $librosLeidos)
                                <td class="imagenesLibros">
                                    <a href="{{route('show',[$librosLeidos->libro_id])}}">
                                        <img style="height: 300px"  src="{{url('images/libros/' .$librosLeidos->libro->imagen)}}" alt="Portada Libro"  onerror="this.src='{{ url('images/libros/WIP.png') }}'">
                                    </a>
                                </td>
                            @endforeach
                        </tr>
                    @endforeach 
                </table>
            </div>
        </div>
    </div>
</div>
@include('footer')