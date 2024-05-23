@include('header')

<br>
<br>
<br>
<a href="{{ url('/backend') }}">Volver atrás</a><br>
<a href="{{ route('librosCreate') }}">Añadir nuevo libro</a>
<br><br>
<table>
    <tr>
        <th class='border-1px'>Nombre</th>
        <th class='border-1px'>Fecha salida</th>
        <th class='border-1px'>Paginas</th>
        <th class='border-1px'>Imagen</th>
        <th class='border-1px'>Synopsis</th>
        <th class='border-1px'>Genero</th>
        <th class='border-1px'>Escritor</th>
        <th class='sinbordes'></th>
        <th class='sinbordes'></th>
    </tr>
    @foreach ($listaLibros as $libros)
        <tr>
            <td class='border-1px'>{{$libros->nombre}}</td>
            <td class='border-1px'>{{$libros->fecha_salida}}</td>
            <td class='border-1px'>{{$libros->paginas}}</td>
            <td class='border-1px'>{{$libros->imagen}}</td>
            <td class='border-1px'>
                <span id="sinopsis-{{ $libros->id }}">
                    {{ implode(' ', array_slice(explode(' ', $libros->synopsis), 0, 10)) }}
                    @if(str_word_count($libros->synopsis) > 10)
                        <span id="more-{{ $libros->id }}" style="display: none;">{{ implode(' ', array_slice(explode(' ', $libros->synopsis), 10)) }}</span>
                        <a href="javascript:void(0);" onclick="toggleSinopsis({{ $libros->id }})" id="toggle-{{ $libros->id }}">... Leer más</a>
                    @endif
                </span>
            </td>
            <td class='border-1px'>{{$libros->genero->genero}}</td>
            <td class='border-1px'>{{ $libros->escritor->nombre }} {{ $libros->escritor->apellidos }}</td>
            <td class='sinbordes'>
                <a href="{{route('librosEdit', $libros->id)}}">Modificar</a>
            </td>
            <td class='sinbordes'>
                <form action="{{route('librosDestroy', $libros->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="Borrar">
                </form>
            </td>
        </tr>
    @endforeach
</table>

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