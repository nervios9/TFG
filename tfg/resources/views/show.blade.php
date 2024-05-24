@include('header')

<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

<style>
    .centered-div {
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: flex-start;
    }
    .content-wrapper {
        max-width: 1200px;
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }
    .main-content {
        display: flex;
        width: 100%;
    }
    .image-section {
        margin-right: 20px;
    }
    #imagenesPeliculas {
        height: 400px;
        object-fit: cover;
        margin-bottom: 20px;
    }
    .details-wrapper {
        display: flex;
        flex-direction: row;
        width: 100%;
    }
    .details {
        max-width: 500px;
    }
    .comments-wrapper {
        display: flex;
        flex-direction: column;
        margin-left: 20px;
        max-width: 400px;
        flex-grow: 1;
    }
    .sinopsis {
        white-space: pre-line;
    }
    .btn-custom {
        margin-top: 20px;
    }
    .input-row {
        margin-bottom: 20px;
    }
    #comentarios {
        margin-top: 40px;
        text-align: left;
    }
    .comentario-item {
        text-align: left;
        border-bottom: 1px solid #ddd;
        padding: 10px 0;
    }
</style>

@section('show', 'info peliculas')
@section('content')
<div class="container centered-div">
    <div class="content-wrapper">
        <div class="main-content">
            <div class="image-section">
                <img id="imagenesPeliculas" src="{{ url('images/libros/' . $libro->imagen) }}" alt="portada libro" onerror="this.src='{{ url('images/libros/WIP.png') }}'">
                <form method="POST" action="{{ route('librosLeidos') }}" class="mb-4">
                    @csrf
                    <input type="hidden" name="usuario" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="libro_id" value="{{ $libro->id }}">
                    <button type="submit" id="miBoton" class="btn btn-primary btn-custom">Añadir libro leído</button>
                </form>
            </div>
            <div class="details-wrapper">
                <div class="details">
                    <h1>{{ $libro->nombre }}</h1>
                    <p><b>Autor:</b> {{ $libro->escritor->nombre }} {{ $libro->escritor->apellidos }}</p>
                    <p><b>Género:</b> {{ $libro->genero->genero }}</p>
                    <p><b>Fecha de estreno:</b> {{ $libro->fecha_salida }}</p>
                    <p><b>Páginas:</b> {{ $libro->paginas }}</p>
                    <p class="sinopsis">
                        <b>Sinopsis:</b>
                        <span id="sinopsis-{{ $libro->id }}">
                            {{ implode(' ', array_slice(explode(' ', $libro->synopsis), 0, 30)) }}
                            @if(str_word_count($libro->synopsis) > 30)
                                <span id="more-{{ $libro->id }}" style="display: none;">{{ implode(' ', array_slice(explode(' ', $libro->synopsis), 30)) }}</span>
                                <a href="javascript:void(0);" onclick="toggleSinopsis({{ $libro->id }})" id="toggle-{{ $libro->id }}">... Leer más</a>
                            @endif
                        </span>
                    </p>
                </div>
                <div class="comments-wrapper">
                    <form action="{{ route('enviarDatos') }}" method="POST" class="mb-4">
                        @csrf
                        <input type="hidden" name="comment_id" id="post">
                        <div class="input-row">
                            <label for="nombre" class="form-label">Usuario:</label>
                            <input class="form-control" type="text" name="nombre" id="nombre" readonly value="{{ Auth::user()->name }}" required>
                        </div>
                        <div class="input-row">
                            <label for="comentario" class="form-label">Comentario:</label>
                            <textarea rows="6" class="form-control" name="comentario" id="comentario" placeholder="Agregue su comentario" required style="resize: none;"></textarea>
                        </div>
                        <input type="hidden" name="usuario" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="libro_id" value="{{ $libro->id }}">
                        <button id="enviar" type="submit" class="btn btn-success">Enviar</button>
                    </form>
                    <h2 id="comentarios">Comentarios</h2>
                    @foreach ($comentarios as $comentario)
                        <div class="comentario-item">
                            <p><b>{{ $comentario->created_at }} {{ $comentario->user->name }} </b>{{ $comentario->comentario }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@yield('content')

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

    // Obtener el botón por su ID
    var boton = document.getElementById('miBoton');

    // Realizar una solicitud al servidor para verificar si el botón debe ser deshabilitado
    fetch('/deshabilitar-boton')
        .then(response => response.json())
        .then(data => {
            // Deshabilitar el botón si la respuesta indica que debe ser deshabilitado
            if (data.deshabilitar) {
                boton.disabled = true;
            }
        })
        .catch(error => {
            console.error('Error al deshabilitar el botón:', error);
        });
</script>