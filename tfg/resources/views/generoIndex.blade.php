@include('header')

<br>
<br>
<br>
<a href="{{ route('generoCreate') }}">Añadir nuevo Genero</a>
<br><br>
<table>
    <tr >
        <th class='border-1px'>Generos</th<th class='sinbordes'></th><th class='sinbordes'></th>
    </tr>
@foreach ($listaGeneros as $generos)
    <tr>
        <td class='border-1px'>{{$generos->genero}}</td>
        <td class='sinbordes' >
            <a href="{{route('generoEdit', $generos->id)}}">Modificar</a>
        </td>
        <td class='sinbordes'>
           <form action = "{{route('generoDestroy', $generos->id)}}" method="POST">
                @csrf
                @method("DELETE")
                <input type="submit" value="Borrar">
            </form>
        </td>
    </tr>
    
@endforeach
</table>