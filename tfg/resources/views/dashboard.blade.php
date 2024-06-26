
<body class="{{ $user->hasRole('admin') ? 'body-admin' : 'body-default' }} fondo">

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
        .btn{
            border: none;
        }
    </style>

<body class="fondo">
    <div class="container mt-5">
        <!-- Utiliza d-flex y justify-content-end para mover el dropdown a la derecha -->
        <div class="d-flex justify-content-end">
            <div class="dropdown mt-3">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('Configuración') }}</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="dropdown-item" href="{{ route('logout') }}" 
                           onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 d-flex align-items-center justify-content-center">
                    <table>
                        <tr>
                            <td colspan="5" class="text-center">{{ __("Libros leídos:") }}</td>
                        </tr>
                        {{--Si has añadido libros leidos los mostrara  en filas de a 5--}}
                        @foreach($listaLibrosLeidos->chunk(5) as $filaIndex => $fila)
                        {{--Muestra un maximo de dos filas de golpe--}}
                            <tr class="filaLibros {{ $filaIndex >= 2 ? 'd-none' : '' }}">
                                @foreach($fila as $librosLeidos)
                                    <td class="imagenesLibros">
                                        <a href="{{ route('show', [$librosLeidos->libro_id]) }}">
                                            <img style="height: 300px" src="{{ url('images/libros/' . $librosLeidos->libro->imagen) }}" alt="Portada Libro" onerror="this.src='{{ url('images/libros/WIP.png') }}'">
                                        </a>
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-3">
            {{--Al pulsar el boton nos aparecceran 2 filas mas--}}
           <button id="mostrarMas" style="background-color: #D95D39" class="btn btn-primary {{ $listaLibrosLeidos->count() > 10 ? '' : 'd-none' }}">Mostrar más</button>
       </div>
    </div>
    @include('footer')
</body>
</html>

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

            filasMostradas += 2;//Añade dos filas mas a las filas que se muestran

            if (filasMostradas >= filas.length) {
                mostrarMasBtn.classList.add('d-none');
            }
        });
    });
</script>