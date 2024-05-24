@include('header')

<style>
    .center-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }
    .custom-table th,
    .custom-table td {
        border: 1px solid black;
    }
    .custom-table .no-border {
        border: none;
    }
    .action-buttons {
        display: flex;
        gap: 10px; /* Espacio entre botones */
    }
    .table-wrapper {
        width: 80%;
        max-width: 800px;
        margin-top: 20px;
        margin-bottom: 20px;
    }
</style>

<div class="container center-container">
    <div class="mb-4 text-center">
        <a href="{{ url('/backend') }}" class="btn btn-secondary mb-2">Volver atrás</a><br>
        <a href="{{ route('generoCreate') }}" class="btn btn-primary">Añadir nuevo Género</a>
    </div>
    <div class="table-wrapper">
        <table class="table custom-table mx-auto">
            <thead>
                <tr>
                    <th>Géneros</th>
                    <th class="no-border"></th>
                    <th class="no-border"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listaGeneros as $generos)
                <tr>
                    <td>{{$generos->genero}}</td>
                    <td colspan="2" class="no-border">
                        <div class="action-buttons">
                            <a href="{{route('generoEdit', $generos->id)}}" class="btn btn-warning">Modificar</a>
                            <form action="{{route('generoDestroy', $generos->id)}}" method="POST">
                                @csrf
                                @method("DELETE")
                                <input type="submit" value="Borrar" class="btn btn-danger">
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@include('footer')