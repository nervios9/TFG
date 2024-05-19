@include('header')





    @isset($generos)
        <br><br>
        <form action="{{ route('generoUpdate', ['genero' => $genero->id]) }}" method="POST">
            @method('PATCH')
    @else
        <form action="{{ route('generosStore') }}" method="POST">
    @endisset
    @csrf
    <br>
    <table class='sinbordes'>
        <tr>
            <td class='sinbordes'>genero:</td>
            <td class='sinbordes'><input type="text" name="genero" value="{{ $generos->genero ?? ''  }}" required></td>
        </tr>
      
        <tr>
            <td class='sinbordes'><a href="{{ route('generoIndex') }}">Volver al listado</a></td>
            <td class='sinbordes'><input type="submit"></td>
        </tr>
    </table>

</form>


