
<body class="{{ $user->hasRole('admin') ? 'body-admin' : 'body-default' }} fondo">
@include('header')



<style>
   
    .container {
      
        
        padding: 20px;
        
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
        text-align: center;
     
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
        width: auto;
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
{{--enlace para hacer otra consulta--}}
    <a href="{{ url('/all') }}">Hacer otra consulta</a>
    <table id="catalogoLibros">
        {{--en caso de no haber libros segun nuestras caracteristicas de busqueda nos mostrara el texto de que no hay libros--}}
        @if($listaLibros->isEmpty())
            <tr>
                <td colspan="5" class="no-results">No hay libros que coincidan con esta búsqueda.</td>
            </tr>
        @else
        {{--Si hay resultados los muestra en filas de 5--}}
            @foreach($listaLibros->chunk(5) as $filaIndex => $fila)
                {{--Muestra un maximo de dos filas a la vez--}}
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

            filasMostradas += 2;//Filas extra añadidas

            if (filasMostradas >= filas.length) {
                mostrarMasBtn.classList.add('d-none');
            }
        });
    });
</script>
@include('footer')
</body>