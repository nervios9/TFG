<body class="fondo">
@include('header')

<style>
    .center-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }
    .table-wrapper {
        width: 100%;
        max-width: 800px;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    .border-1px {
        border: 1px solid black;
    }
    .sinbordes {
        border: none;
    }
    .action-cell {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .table th {
        text-align: center;
        background-color: rgb(186, 131, 75);
        color: #343a40; /* Color del texto de la cabecera */
    }
 
</style>

<div class="container center-container">
    <div class="mb-4 text-center">
        <a href="{{ url('/backend') }}" class="btn btn-secondary mb-2">Volver atrás</a><br>
        <a href="{{ route('librosCreate') }}" style="background-color: #D95D39" class="btn btn-primary">Añadir nuevo libro</a>
    </div>
    <div class="table-wrapper">
        <table class="table custom-table mx-auto">
            <thead>
                <tr>
                    <th class='border-1px'>Nombre</th>
                    <th class='border-1px'>Fecha salida</th>
                    <th class='border-1px'>Paginas</th>
                    <th class='border-1px'>Imagen</th>
                    <th class='border-1px'>Synopsis</th>
                    <th class='border-1px'>Genero</th>
                    <th class='border-1px'>Escritor</th>
                    <th class='border-1px'>Acciones</th>
                  
                </tr>
            </thead>
            <tbody>
                @foreach ($listaLibros as $libros)
                    <tr>
                        <td class='border-1px'>{{$libros->nombre}}</td>
                        <td class='border-1px'>{{$libros->fecha_salida}}</td>
                        <td class='border-1px'>{{$libros->paginas}}</td>
                        <td class='border-1px'>{{$libros->imagen}}</td>
                        <td class='border-1px'>
                            <span id="sinopsis-{{ $libros->id }}">
                                {{ implode(' ', array_slice(explode(' ', $libros->synopsis), 0, 2)) }}
                                @if(str_word_count($libros->synopsis) > 10)
                                    <span id="more-{{ $libros->id }}" style="display: none;">{{ implode(' ', array_slice(explode(' ', $libros->synopsis), 10)) }}</span>
                                    <a href="javascript:void(0);" onclick="toggleSinopsis({{ $libros->id }})" id="toggle-{{ $libros->id }}">... Leer más</a>
                                @endif
                            </span>
                        </td>
                        <td class='border-1px'>{{$libros->genero->genero}}</td>
                        <td class='border-1px'>{{ $libros->escritor->nombre }} {{ $libros->escritor->apellidos }}</td>
                        <td class='border-1px '>
                            <a href="{{route('librosEdit', $libros->id)}}" class="btn btn-warning">Modificar</a>
                            <form action="{{route('librosDestroy', $libros->id)}}"  method="POST">
                                @csrf
                                @method("DELETE")
                                <input type="submit" value="Borrar" class="btn btn-danger">
                            </form>
                        </td>
                      
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    function toggleSinopsis(libroId) {
        var moreText = document.getElementById("more-" + libroId);
        var toggleLink = document.getElementById("toggle-" + libroId);

        if (moreText.style.display === "none") {
            moreText.style.display = "inline";
            toggleLink.innerHTML = " Leer menos";
        } else {
            moreText.style.display = "none";
            toggleLink.innerHTML = "... Leer más";
        }
    }
</script>
@include('footer')
</body>