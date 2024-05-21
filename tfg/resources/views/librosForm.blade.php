@include('header')





    @isset($libros)
        <br><br>
        <form action="{{ route('librosUpdate', ['libros' => $libros->id]) }}" method="POST">
            @method('PATCH')
    @else
        <form action="{{ route('librosStore') }}" method="POST">
    @endisset
    @csrf
    <br>
    <table class='sinbordes'>
        <tr>
            <td class='sinbordes'>Nombre:</td>
            <td class='sinbordes'><input type="text" name="nombre" value="{{ $libros->nombre ?? ''  }}" required></td>
        </tr>
        <tr>
            <td class='sinbordes'>Fecha salida:</td>
            <td class='sinbordes'><input type="text" name="fecha_salida" value="{{ $libros->fecha_salida ?? '' }}" required></td>
        </tr>
        <tr>
            <td class='sinbordes'>Paginas:</td>
            <td class='sinbordes'><input type="text" name="paginas"value="{{ $libros->paginas ?? '' }}" required></td>
        </tr>
        <tr>
            <td class='sinbordes'>Imagen:</td>
            <td class='sinbordes'><input type="text" name="imagen" value="{{ $libros->imagen ?? '' }}" required></td>
        </tr>
        <tr>
            <td class='sinbordes'>Synopsis:</td>
            <td class='sinbordes'><input type="text" name="synopsis" value="{{ $libros->synopsis ?? '' }}" required></td>
        </tr>
        <tr>
            
                <td class='sinbordes'>Genero:</td>
                <td class='sinbordes'>
                    <select name="genero_id" required>
                        <option value="">Seleccione un género</option>
                        @foreach($generos as $genero)
                            <option value="{{ $genero->id }}" {{ (isset($libros) && $libros->genero_id == $genero->id) ? 'selected' : '' }}>
                                {{ $genero->genero }}
                            </option>
                        @endforeach
                    </select>
                </td>
        
        </tr>
        <tr>
            <td class='sinbordes'>Escritor:</td>
            <td class='sinbordes'>
                <select name="escritor_id" required>
                    <option value="">Seleccione un escritor</option>
                    @foreach($escritor as $escritor)
                        <option value="{{ $escritor->id }}" {{ (isset($libros) && $libros->escritor_id == $escritor->id) ? 'selected' : '' }}>
                            {{ $escritor->nombre }} {{ $escritor->apellidos }}
                        </option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            
            <td class='sinbordes'>Genero:</td>
            <td class='sinbordes'>
                <select name="subgenero_id" >
                    <option value="">Seleccione un género</option>
                    @foreach($generos as $subgenero)
                        <option value="{{ $subgenero->id }}" {{ (isset($libros) && $libros->subgenero_id == $subgenero->id) ? 'selected' : '' }}>
                            {{ $subgenero->genero }}
                        </option>
                    @endforeach
                </select>
            </td>
     </tr>
        <tr>
            <td class='sinbordes'><a href="{{ route('librosIndex') }}">Volver al listado</a></td>
            <td class='sinbordes'><input type="submit"></td>
        </tr>
    </table>

</form>


