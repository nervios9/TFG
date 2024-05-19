@include('header')





    @isset($escritor)
        <br><br>
        <form action="{{ route('escritorUpdate', ['escritor' => $escritor->id]) }}" method="POST">
            @method('PATCH')
    @else
        <form action="{{ route('escritorStore') }}" method="POST">
    @endisset
    @csrf
    <br>
    <table class='sinbordes'>
        <tr>
            <td class='sinbordes'>Nombre:</td>
            <td class='sinbordes'><input type="text" name="nombre" value="{{ $escritor->nombre ?? ''  }}" required></td>
        </tr>
        <tr>
            <td class='sinbordes'>Apellidos:</td>
            <td class='sinbordes'><input type="text" name="apellidos" value="{{ $escritor->apellidos ?? '' }}" required></td>
        </tr>
        
        <tr>
            <td class='sinbordes'><a href="{{ route('escritorIndex') }}">Volver al listado</a></td>
            <td class='sinbordes'><input type="submit"></td>
        </tr>
    </table>

</form>


