@include ('header')

<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
@section('show', 'info peliculas')
@section('content')
<div class="container d-flex justify-content-center align-items-center centered-div">
    <div class="text-center">
        <h1>{{ $libro->nombre }}</h1>

        <img style="height: 400px" id="imagenesPeliculas" src="{{ url('images/libros/' . $libro->imagen) }}" alt="portada libro" onerror="this.src='{{ url('images/libros/WIP.png') }}'">

        <p><b>Autor:</b> {{ $libro->escritor->nombre }} {{ $libro->escritor->apellidos }}</p>
        <p><b>Genero:</b> {{ $libro->genero->genero }}</p>
        <p><b>Fecha de estreno:</b> {{ $libro->fecha_salida }}</p>
        <p><b>Paginas:</b> {{ $libro->paginas }}</p>

        <p style="white-space: pre-line;" class="">
            <b>Sinopsis:</b>
            <span class="text-justify" id="sinopsis-{{ $libro->id }}">
                {{ implode(' ', array_slice(explode(' ', $libro->synopsis), 0, 30)) }}
                @if(str_word_count($libro->synopsis) > 10)
                    <span id="more-{{ $libro->id }}" style="display: none;">{{ implode(' ', array_slice(explode(' ', $libro->synopsis), 10)) }}</span>
                    <a href="javascript:void(0);" onclick="toggleSinopsis({{ $libro->id }})" id="toggle-{{ $libro->id }}">... Leer más</a>
                @endif
            </span>
        </p>

        <form method="POST" action="{{ route('librosLeidos') }}">
            @csrf
            <input type="hidden" name="usuario" value="{{ Auth::user()->id }}">
            <input type="hidden" name="libro_id" value="{{ $libro->id }}">
            <button type="submit" id="miBoton">Añadir libro leído</button>
        </form>

        <form action="{{ route('enviarDatos') }}" method="POST">
            @csrf
            <div class="input-row">
                <input type="hidden" name="comment_id" id="post" placeholder="Nombre" />
                <label for="nombre" class="form-label">Usuario:</label>
                <input class="form-control" type="text" name="nombre" id="nombre" readonly value="{{ Auth::user()->name }}" required/>
            </div>
            <div class="input-row">
                <label for="comme" class="form-label">Comentario:</label>
                <p class="emoji-picker-container">
                    <textarea rows="6" class="form-control" type="text" name="comentario" id="comentario" placeholder="Agregue su comentario" required></textarea>
                </p>
            </div>
            <input type="hidden" name="usuario" value="{{ Auth::user()->id }}">
            <input type="hidden" name="libro_id" value="{{ $libro->id }}">
            <button type="submit">Enviar</button>
        </form>

        <h2>Comentarios</h2>

        @foreach ($comentarios as $comentario)
            <p>
                <b>{{ $comentario->created_at }} {{ $comentario->user->name }}</b>
                {{ $comentario->comentario }}
            </p>
        @endforeach

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