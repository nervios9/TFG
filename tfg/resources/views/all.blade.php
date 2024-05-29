@include ('header')

<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

<style>
    .centered-div {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .container-centered {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    table {
        width: 60%;
        text-align: center;
        border-collapse: collapse; /* Colapsar los bordes de las celdas */
    }
    td {
        padding: 0; /* Eliminar el padding para que no haya espaciado alrededor */
    }
    .imagenesLibros img {
        display: block;
        margin: 0 auto;
    }
    .imagenesLibros {
        padding: 10px; /* Espaciado horizontal entre las celdas */
        
    }
    .d-none {
        display: none;
    }
    .btn1 {
        display: inline-block;
        padding: 10px 20px;
        margin-top: 20px;
        font-size: 16px;
        border: none;
        border-radius: 4px;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s;
    }
</style>

<div class=" {{ $user->hasRole('admin') ? 'body-admin' : 'body-default' }} container d-flex justify-content-center mt-3 align-items-center centered-div">
    <h1 id="catalogo">Catalogo de Libros</h1>
    <form method="GET" action="{{ route('buscador') }}">
        @csrf
    </div>
    <div class="container d-flex justify-content-center align-items-center centered-div">
        <select name="opcion">
            @foreach($listaGeneros as $genero)
                <option value="{{ $genero->id }}">{{ $genero->genero }}</option>
            @endforeach
        </select>
        <button type="submit" style="background-color: #D95D39" class="btn1 btnBorrar" id="submit">Buscar</button>
    </form>
</div>

<div class="container-centered">
    <table id="catalogoLibros">
        @foreach($listaLibros->chunk(5) as $filaIndex => $fila)
            <tr class="filaLibros {{ $filaIndex >= 2 ? 'd-none' : '' }}">
                @foreach($fila as $libros)
                    <td class="imagenesLibros">
                        <a href="{{ route('show', [$libros->id]) }}">
                            <img style="height: 300px width:auto"  src="{{ url('images/libros/' . $libros->imagen) }}" onerror="this.src='{{ url('images/libros/WIP.png') }}'">
                        </a>
                    </td>
                @endforeach
            </tr>
        @endforeach
    </table>
    <div class="d-flex justify-content-center mt-3">
        <button id="mostrarMas" style="background-color: #D95D39" class="btn1 btn-primary {{ $listaLibros->count() > 10 ? '' : 'd-none' }}">Mostrar más</button>
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
@include('footer')