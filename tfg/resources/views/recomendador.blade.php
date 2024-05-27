<body class="fondo">
@include('header')
<style>
  .libros{
        /* El div ocupará el 70% del ancho del viewport */
          height: 29vw; /* Altura de ejemplo */
          /* Color de fondo de ejemplo */
          margin: 0 auto; /* Centrar horizontalmente */
  }
</style>
<div class=" libros container d-flex justify-content-center align-items-center centered-div">
    <form method="GET" action="{{ route('recomend') }}" class="d-flex">
        @csrf
        <select name="opcion" class="form-select mr-2">
            <option value="" selected>Selecciona un género</option>
            @foreach($listaGeneros as $genero)
                <option value="{{ $genero->id }}">{{ $genero->genero }}</option>
            @endforeach
        </select>
        <button type="submit" id="submit"  class="btn btn-primary">Buscar</button>
    </form>
</div>

@include('footer')
</body>
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
