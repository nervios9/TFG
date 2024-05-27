<body class="fondo">
@include('header')



<style>
   
    .container {
      
        
        padding: 20px;
        
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
        text-align: center;
        color: #333;
    }
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
        border-collapse: collapse;
    }
    td {
        padding: 0;
    }
    .imagenesLibros img {
        display: block;
        margin: 0 auto;
        max-width: 100%;
        height: auto;
    }
    .imagenesLibros {
        padding: 10px;
    }
    .d-none {
        display: none;
    }
    .btn {
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
    .btn:hover {
        background-color: #0056b3;
    }
    .no-results {
        text-align: center;
        color: #888;
        margin-top: 20px;
    }
</style>

<div class="container-centered">
    <h1>Buscador:</h1>
    <a href="{{ url('/all') }}">Hacer otra consulta</a>
    <table id="catalogoLibros">
        @if($listaLibros->isEmpty())
            <tr>
                <td colspan="5" class="no-results">No hay libros que coincidan con esta búsqueda.</td>
            </tr>
        @else
            @foreach($listaLibros->chunk(5) as $filaIndex => $fila)
                <tr class="filaLibros {{ $filaIndex >= 2 ? 'd-none' : '' }}">
                    @foreach($fila as $libros)
                        <td class="imagenesLibros">
                            <a href="{{ route('show', [$libros->id]) }}">
                                <img src="{{ url('images/libros/' . $libros->imagen) }}" alt="Portada del libro" onerror="this.src='{{ url('images/libros/WIP.png') }}'">
                            </a>
                        </td>
                    @endforeach
                </tr>
            @endforeach
        @endif
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
@include('footer')
</body>