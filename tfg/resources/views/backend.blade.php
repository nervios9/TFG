@include('header')
<br>
<table>
    <tr class='border-1px'>
        <th class='border-1px'>Nombre</th><th class='border-1px'>Fecha salida</th><th class='border-1px'>Paginas</th><th class='border-1px'>Imagen</th><th class='border-1px'>Synopsis</th><th class='border-1px'>Genero</th><th class='border-1px'>Escritor</th><th class='sinbordes'></th><th class='sinbordes'></th>
    </tr>
@foreach ($listaLibros as $libros)
    <tr class='border-1px'>
        <td class='border-1px'>{{$libros->nombre}}</td>
        <td class='border-1px'>{{$libros->fecha_salida}}</td>
        <td class='border-1px'>{{$libros->paginas}}</td>
        <td class='border-1px'>{{$libros->imagen}}</td>
        <td >{{$libros->synopsis}}</td>
        <td class='border-1px'>{{$libros ->genero->genero}}</td>
        <td class='border-1px'>{{ $libros->escritor->nombre }} {{ $libros->escritor->apellidos }}</td>
        
        <td class='sinbordes centrado'>
            {{--<a href="{{route('employees.edit', $employees->id)}}">Modificar</a>--}}
        </td>
        <td class='sinbordes'>
          {{-- <form action = "{{route('employees.destroy', $employees->id)}}" method="POST">--}} 
                @csrf
                @method("DELETE")
                <input type="submit" value="Borrar">
            </form>
        </td>
    </tr>
    
@endforeach
</table>