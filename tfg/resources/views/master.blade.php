 @include('header')

 
 
 <h1 class="d-flex justify-content-center  align-items-center centered-h1" id="carrousel1">Recien salidos de la Imprenta</h1>
 <div class="container d-flex justify-content-center align-items-center centered-div">
    
 <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach ($elementos as $key => $libros)
            <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                <a href="{{route('show',[$libros->id])}}"><img style="height: 300px"  src="{{url('images/libros/' .$libros->imagen)}}"alt="Portada Libro"  onerror="this.src='{{ url('images/libros/WIP.png') }}'"></a></td>
              
                <div class="carousel-caption d-none d-md-block">
                   
                    
                </div>
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</div>



<h1 class="d-flex justify-content-center  align-items-center centered-h1" id="carrousel2">Autor destacado: {{ Session::get('nombre') }} {{ Session::get('apellidos') }}  </h1>
<div class="container d-flex justify-content-center align-items-center centered-div">
    
    <div id="carouselExampleControls2" class="carousel slide d-flex justify-content-center  align-items-center" data-bs-ride="carousel">
       <div class="carousel-inner">
           @foreach ($elementos2 as $key => $libros)
               <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                <a href="{{ route('show', [$libros->id ]) }}"><img style="height: 300px"  src="{{url('images/libros/' .$libros->imagen)}}"alt="Portada Libro" onerror="this.src='{{ url('images/libros/WIP.png') }}'"></a></td>
                 
                   <div class="carousel-caption d-none d-md-block">
                      
                       
                   </div>
               </div>
           @endforeach
        </div>
 <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
   </div>

  
   @include('footer')