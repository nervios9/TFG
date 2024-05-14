<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   @include('master') 


<p></p>
<p></p>
   <form method="GET" action="{{ route('recomend') }}">
    @csrf
<select name="opcion">
  
    @foreach($listaGeneros as $genero)
        <option value="{{ $genero->id }}">{{ $genero->genero }}</option>
    @endforeach
</select>
<button type="submit">Buscar</button>
</form>
{{--
   <p>Select multiple</p>

    <select id="select1" onchange="mostrarSelect2()">
    <option value="" selected>Elige que tipo de libro quieres</option>
  <option value="novela">Quiero leer una novela</option>
  <option value="romance">Que sea de romance</option>
  <option value="historico">Quiero algo historico</option>
</select>
<select id="select2" style="display:none;">
<option value="" selected>Elige un tipo de novela</option>
  <option value="adultos">Libros para adultos</option>
  <option value="juvenil">Libros juveniles</option>
</select>
--}}
</body>
</html>



{{--
<script>

function mostrarSelect2() {
            var select1 = document.getElementById("select1");
            var select2 = document.getElementById("select2");

            // Obtener el valor seleccionado en el primer select
            var valorSeleccionado = select1.options[select1.selectedIndex].value;

            // Mostrar el segundo select solo si se selecciona la opción "novela" en el primero
            if (valorSeleccionado === "novela") {
                select2.style.display = "block";
            } else {
                select2.style.display = "none";
            }
        }


</script>
--}}