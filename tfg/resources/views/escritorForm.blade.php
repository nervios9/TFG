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
    .form-wrapper {
        width: 100%;
        max-width: 600px;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    .form-table td {
        padding: 10px;
    }
</style>

<div class="container center-container">
    @isset($escritor)
        <form action="{{ route('escritorUpdate', ['escritor' => $escritor->id]) }}" method="POST" class="form-wrapper">
            @method('PATCH')
    @else
        <form action="{{ route('escritorStore') }}" method="POST" class="form-wrapper">
    @endisset
    @csrf
        <table class="table table-borderless form-table">
            <tr>
                <td>Nombre:</td>
                <td><input type="text" name="nombre" value="{{ $escritor->nombre ?? '' }}" class="form-control" required></td>
            </tr>
            <tr>
                <td>Apellidos:</td>
                <td><input type="text" name="apellidos" value="{{ $escritor->apellidos ?? '' }}" class="form-control" required></td>
            </tr>
            <tr>
                <td><a href="{{ route('escritorIndex') }}" class="btn btn-secondary">Volver al listado</a></td>
                <td><input type="submit" class="btn btn-primary" value="Crear"></td>
            </tr>
        </table>
    </form>
</div>
@include('footer')