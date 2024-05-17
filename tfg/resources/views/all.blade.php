@include ('header')

<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
<div class="container d-flex justify-content-center mt-3 align-items-center centered-div">
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
    <table id="catalogoLibros">
        @foreach($listaLibros->chunk(5) as $filaIndex => $fila)
            <tr class="filaLibros {{ $filaIndex >= 2 ? 'd-none' : '' }}">
                @foreach($fila as $libros)
                    <td class="imagenesLibros"><a href="{{route('show',[$libros->id])}}"><img style="height: 300px" src="{{url('images/libros/' .$libros->imagen)}}" alt="Portada Libro"></a></td>
                @endforeach
            </tr>
        @endforeach
    </table>
    <div class="d-flex justify-content-center mt-3">
      <button id="mostrarMas" class="btn btn-primary {{ $listaLibros->count() > 10 ? '' : 'd-none' }}">Mostrar más</button>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const filas = document.querySelectorAll('.filaLibros');
        const mostrarMasBtn = document.getElementById('mostrarMas');
        let filasMostradas = 2; // Número inicial de filas mostradas

        mostrarMasBtn.addEventListener('click', () => {
            const filasOcultas = Array.from(filas).slice(filasMostradas, filasMostradas + 2);
            filasOcultas.forEach(fila => {
                fila.classList.remove('d-none');
            });

            filasMostradas += 2;

            if (filasMostradas >= filas.length) {
                mostrarMasBtn.classList.add('d-none');
            }
        });
    });
</script>

<style>
    .d-none {
        display: none;
    }
</style>