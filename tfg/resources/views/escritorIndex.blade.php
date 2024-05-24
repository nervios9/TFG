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
        width: 100%;
        max-width: 800px;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    .border-1px {
        border: 1px solid black;
    }
    .sinbordes {
        border: none;
    }
    .action-cell {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .table th {
        text-align: center;
        background-color: #f8f9fa; /* Cambia este color según tu preferencia */
        color: #343a40; /* Color del texto de la cabecera */
    }
</style>

<div class="container center-container">
    <div class="mb-4 text-center">
        <a href="{{ url('/backend') }}" class="btn btn-secondary mb-2">Volver atrás</a><br>
        <a href="{{ route('escritorCreate') }}" class="btn btn-primary">Añadir nuevo Escritor</a>
    </div>
    <div class="table-wrapper">
        <table class="table custom-table mx-auto">
            <thead>
                <tr>
                    <th class='border-1px'>Nombre</th>
                    <th class='border-1px'>Apellidos</th>
                    <th class='sinbordes'></th>
                    <th class='sinbordes'></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listaEscritor as $escritor)
                    <tr>
                        <td class='border-1px'>{{$escritor->nombre}}</td>
                        <td class='border-1px'>{{$escritor->apellidos}}</td>
                        <td class='sinbordes action-cell'>
                            <a href="{{route('escritorEdit', $escritor->id)}}" class="btn btn-warning">Modificar</a>
                        </td>
                        <td class='sinbordes action-cell'>
                            <form action="{{route('escritorDestroy', $escritor->id)}}" method="POST">
                                @csrf
                                @method("DELETE")
                                <input type="submit" value="Borrar" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>