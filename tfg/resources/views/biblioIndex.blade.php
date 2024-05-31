<body class="fondo body-admin">
@include('header')

<style>
    .center-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }
    .table-wrapper {
        width: auto;
        max-width: 800px;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    .border-1px {
        border: 1px solid black;
    }
  
    .action-cell {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .table th,tr {
        text-align: center;
        
       border-color: black;
        color: black;
    }
    .table th {
      background-color: rgb(186, 131, 75); 
    }
</style>

<div class="container center-container">
    <div class="mb-4 text-center">
        <a href="{{ url('/backend') }}" class="btn btn-secondary mb-2">Volver atrás</a><br>
        <a href="{{ route('biblioCreate') }}" style="background-color: #D95D39" class="btn btn-primary">Añadir nuevo bibliotecario</a>
    </div>
    <div class="table-wrapper">
        <table class="table custom-table mx-auto">
            <thead>
                <tr>
                    <th class='border-1px'>Nombre</th>
                    <th class='border-1px'>Correo Electrónico</th>
                    <th class='border-1px'>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bibliotecarios as $bibliotecario)
                    <tr>
                        <td class='border-1px'>{{ $bibliotecario->name }}</td>
                        <td class='border-1px'>{{ $bibliotecario->email }}</td>
                        <td class='border-1px'>
                            <a href="{{route('biblioEdit', $bibliotecario->id)}}" class="btn btn-warning">Modificar</a>
                            <form action="{{ route('biblioDestroy', $bibliotecario->id) }}"  method="POST">
                                @csrf
                                @method("DELETE")
                                <input type="submit" value="Eliminar" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('footer')
</body>