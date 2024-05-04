<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{ __("Libros leidos:") }}
    @foreach($listaLibrosLeidos ->chunk(5) as $fila)
    <tr>
        @foreach($fila as $librosLeidos)
            <td class="imagenesLibros"><a href="{{route('show',[$librosLeidos->libro_id])}}"><img style="height: 300px"  src="{{url('images/libros/' .$librosLeidos->libros->imagen)}}"alt="Portada Libro"></a></td>
            
        @endforeach
    </tr>
                    
    @endforeach
</body>
</html>