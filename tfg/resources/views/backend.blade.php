<body class="fondo">
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
    <input type="su#E8799Fbmit" value="Escritores" class="grande">
</form>

<form action = "{{route('generoIndex')}}" method="GET" class="centrado">
    @csrf
    <input type="submit" value="Generos" class="grande">
</form>
@role('admin')
<form action = "{{route('userIndex')}}" method="GET" class="centrado">
    @csrf
    <input type="submit" value="Usuarios" class="grande">
</form>
<form action = "{{route('biblioIndex')}}" method="GET" class="centrado">
    @csrf
    <input type="submit" value="Bibliotecarios" class="grande">
</form>
@endrole
@include('footer')
</body>