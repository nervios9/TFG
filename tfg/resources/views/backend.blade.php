<body class="fondo">
@include('header')
<br>
<br>
<br>

<style>
 .redondear { 
            border-radius: 20px; /* Redondear las esquinas */     
        }

</style>
  {{--Al pulsar cada uno de los botones nos llevara a la ventana de configurar cada uno de los elementos--}}
  <form action="{{ route('librosIndex') }}" method="GET" class="centrado">
    @csrf
    <input type="submit" value="Libros" class="grande redondear">
</form>

<form action="{{ route('escritorIndex') }}" method="GET" class="centrado">
    @csrf
    <input type="submit" value="Escritores" class="grande redondear">
</form>

<form action="{{ route('generoIndex') }}" method="GET" class="centrado">
    @csrf
    <input type="submit" value="Géneros" class="grande redondear">
</form>

@role('admin')
<form action="{{ route('userIndex') }}" method="GET" class="centrado">
    @csrf
    <input type="submit" value="Usuarios" class="grande redondear">
</form>

<form action="{{ route('biblioIndex') }}" method="GET" class="centrado">
    @csrf
    <input type="submit" value="Bibliotecarios" class="grande redondear">
</form>
@endrole

@include('footer')
</body>