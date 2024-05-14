<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
<link rel="stylesheet" href="{{ asset('bootstrap-4.0.0-dist/css/bootstrap.css') }}">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" >
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" ></script>
<script src="{{ asset('js/app.js') }}" defer></script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
               
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   
                   

               {{--
                {{ __("Libros leidos:") }}
              @foreach($listaLibrosLeidos ->chunk(5) as $fila)
                <tr>
                    @foreach($fila as $librosLeidos)
                        <td class="imagenesLibros"><a href="{{route('show',[$librosLeidos->libro_id])}}"><img style="height: 300px"  src="{{url('images/libros/' .$librosLeidos->libros->imagen)}}"alt="Portada Libro"></a></td>
                        
                    @endforeach
                </tr>
                                
                @endforeach 
--}}

                   
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>