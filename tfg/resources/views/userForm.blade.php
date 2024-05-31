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
    @isset($user2)
        <form action="{{ route('userUpdate', ['user' => $user->id]) }}" method="POST" class="form-wrapper">
            @method('PATCH')
    @else
        <form action="{{ route('userStore') }}" method="POST" class="form-wrapper">
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
                <td><input type="password" name="password" class="form-control" required></td>
            </tr>
           
            <tr>
                <td><a href="{{ route('userIndex') }}" class="btn btn-secondary">Volver al listado</a></td>
                <td><input type="submit" style="background-color: #D95D39"  class="btn btn-primary" value="Crear"></td>
            </tr>
        </table>
    </form>
</div>
@include('footer')
</body>