@include('header')

<br>
<br>
<br>
<a href="{{ route('escritorCreate') }}">Añadir nuevo Escritor</a>
<br><br>
<table>
    <tr >
        <th class='border-1px'>Nombre</th><th class='border-1px'>Apellidos</th><th class='sinbordes'></th><th class='sinbordes'></th>
    </tr>
@foreach ($listaEscritor as $escritor)
    <tr>
        <td class='border-1px'>{{$escritor->nombre}}</td>
        <td class='border-1px'>{{$escritor->apellidos}}</td>
        <td class='sinbordes' >
            <a href="{{route('escritorEdit', $escritor->id)}}">Modificar</a>
        </td>
        <td class='sinbordes'>
           <form action = "{{route('escritorDestroy', $escritor->id)}}" method="POST">
                @csrf
                @method("DELETE")
                <input type="submit" value="Borrar">
            </form>
        </td>
    </tr>
    
@endforeach
</table>