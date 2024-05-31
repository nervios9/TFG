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
        width: auto;
        max-width: 800px;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    .table th {
      background-color: rgb(186, 131, 75); 
    }
    .columna{
        width: 200px;   
    }
</style>

<div class="container center-container">
    <div class="mb-4 text-center">
        <a href="{{ url('/backend') }}" class="btn btn-secondary mb-2">Volver atrás</a><br>
        <a href="{{ route('generoCreate') }}" style="background-color: #D95D39" class="btn btn-primary">Añadir nuevo Género</a>
    </div>
    <div class="table-wrapper">
        <table class="table custom-table mx-auto">
            <thead>
                <tr>
                    <th class="columna border-1px">Géneros</th>
                    <th class='columna  border-1px'>Acciones</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($listaGeneros as $generos)
                <tr>
                    <td>{{$generos->genero}}</td>
                    <td class="border-1px">
                        <div class=" text-center">
                            <a href="{{route('generoEdit', $generos->id)}}" class="btn btn-warning">Modificar</a>
                            <form action="{{route('generoDestroy', $generos->id)}}" class="text-center" method="POST">
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
</body>