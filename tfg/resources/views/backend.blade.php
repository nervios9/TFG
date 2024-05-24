@include('header')
<br>
<br>
<br>



<form action = "{{route('librosIndex')}}" method="GET" class="centrado">
    @csrf
    <input type="submit" value="Libros" class="grande">
</form>

<form action = "{{route('escritorIndex')}}" method="GET" class="centrado">
    @csrf
    <input type="submit" value="Escritores" class="grande">
</form>

<form action = "{{route('generoIndex')}}" method="GET" class="centrado">
    @csrf
    <input type="submit" value="Generos" class="grande">
</form>


@include('footer')