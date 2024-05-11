<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



@foreach($listaLibrosLeidos ->chunk(5) as $fila)
    @foreach($fila as $librosLeidos)
        <td class="imagenesLibros"><a href="{{route('show,[$librosLeidos->libro_id]')}}"><img style="height: 300px"  src="{{url('images/libros/' .$librosLeidos->imagen)}}"alt="Portada Libro"></a></td>

<p> {{$librosLeidos->id}} </p>
    @endforeach               
@endforeach 
</body>
</html>