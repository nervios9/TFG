@include('header')

<style>
    .center-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }
    .form-wrapper {
        width: 100%;
        max-width: 800px;
        margin-top: 20px;
        margin-bottom: 20px;
    }
</style>

<div class="container center-container">
    @isset($libros)
        <form action="{{ route('librosUpdate', ['libros' => $libros->id]) }}" method="POST">
            @method('PATCH')
    @else
        <form action="{{ route('librosStore') }}" method="POST" enctype="multipart/form-data">
    @endisset
    @csrf

    <div class="row justify-content-center form-wrapper">
        <div class="col-md-8">
            <table class="table table-borderless">
                <tr>
                    <td>Nombre:</td>
                    <td><input type="text" name="nombre" value="{{ $libros->nombre ?? '' }}" class="form-control" required></td>
                </tr>
                <tr>
                    <td>Fecha salida:</td>
                    <td><input type="text" name="fecha_salida" value="{{ $libros->fecha_salida ?? '' }}" class="form-control" required></td>
                </tr>
                <tr>
                    <td>Paginas:</td>
                    <td><input type="text" name="paginas" value="{{ $libros->paginas ?? '' }}" class="form-control" required></td>
                </tr>
                <tr>
                    <td>Imagen:</td>
                    <td><input type="file" name="imagen" class="form-control"></td>
                </tr>
                <tr>
                    <td>Synopsis:</td>
                    <td><input type="text" name="synopsis" value="{{ $libros->synopsis ?? '' }}" class="form-control" required></td>
                </tr>
                <tr>
                    <td>Genero:</td>
                    <td>
                        <select name="genero_id" class="form-control" required>
                            <option value="">Seleccione un género</option>
                            @foreach($generos as $genero)
                                <option value="{{ $genero->id }}" {{ (isset($libros) && $libros->genero_id == $genero->id) ? 'selected' : '' }}>
                                    {{ $genero->genero }}
                                </option>
                            @endforeach
                        </select>
                        <a href="{{ route('generoCreate') }}">Añadir nuevo Genero</a>
                    </td>
                </tr>
                <tr>
                    <td>Escritor:</td>
                    <td>
                        <select name="escritor_id" class="form-control" required>
                            <option value="">Seleccione un escritor</option>
                            @foreach($escritor as $escritor)
                                <option value="{{ $escritor->id }}" {{ (isset($libros) && $libros->escritor_id == $escritor->id) ? 'selected' : '' }}>
                                    {{ $escritor->nombre }} {{ $escritor->apellidos }}
                                </option>
                            @endforeach
                        </select>
                        <a href="{{ route('escritorCreate') }}">Añadir nuevo Escritor</a>
                    </td>
                </tr>
                <tr>
                    <td>SubGenero:</td>
                    <td>
                        <select name="subgenero_id" class="form-control">
                            <option value="">Seleccione un subgénero</option>
                            @foreach($generos as $subgenero)
                                <option value="{{ $subgenero->id }}" {{ (isset($libros) && $libros->subgenero_id == $subgenero->id) ? 'selected' : '' }}>
                                    {{ $subgenero->genero }}
                                </option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><a href="{{ route('librosIndex') }}">Volver al listado</a></td>
                    <td><input type="submit" class="btn btn-primary"></td>
                </tr>
            </table>
        </div>
    </div>
</form>
</div>
@include('footer')