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
    @isset($bibliotecario)
        <form action="{{ route('biblioUpdate', ['bibliotecario' => $bibliotecario->id]) }}" method="POST" class="form-wrapper">
            @method('PATCH')
    @else
        <form action="{{ route('biblioStore') }}" method="POST" class="form-wrapper">
    @endisset
    @csrf
        <table class="table table-borderless form-table">
            <tr>
                <td>Nombre:</td>
                <td><input type="text" name="name" class="form-control" required></td>
            </tr>
            <tr>
                <td>Correo:</td>
                <td><input type="text" name="email"  class="form-control" required></td>
            </tr>
            <tr>
                <td>Contraseña:</td>
                <td><input type="password" name="password"  class="form-control" required></td>
            </tr>
           
            <tr>
                <td><a href="{{ route('biblioIndex') }}" class="btn btn-secondary">Volver al listado</a></td>
                <td><input type="submit" class="btn btn-primary" style="background-color: #D95D39" value="Crear"></td>
            </tr>
        </table>
    </form>
</div>
@include('footer')
</body>