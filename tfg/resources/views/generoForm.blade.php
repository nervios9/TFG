<body class="fondo">
@include('header')

<style>
    .center-container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }
    .card {
        padding: 20px;
    }
</style>

<div class=" center-container">
    @isset($generos)
        <form action="{{ route('generoUpdate', ['genero' => $genero->id]) }}" method="POST">
            @method('PATCH')
    @else
        <form action="{{ route('generosStore') }}" method="POST">
    @endisset
    @csrf

    
            <table class='table table-borderless'>
                <tr>
                    <td><b>Género:</b></td>
                    <td><input type="text" name="genero" value="{{ $generos->genero ?? '' }}" required></td>
                </tr>
                <tr>
                    <td><a href="{{ route('generoIndex') }}">Volver al listado</a></td>
                    <td><input type="submit" class="btn btn-primary"></td>
                </tr>
            </table>
</form>
</div>
@include('footer')