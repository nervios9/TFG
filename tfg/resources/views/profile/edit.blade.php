<body class="fondo">
<x-app-layout>
    
    @include ('header')

      <style>
        header {
    /* Ajusta las propiedades de tamaño y posicionamiento según sea necesario */
    height: 17%;
    width: 100%; /* o un valor específico */
    margin: 0; /* o ajusta los márgenes según sea necesario */
    padding: 10px; /* o ajusta el relleno según sea necesario */
    /* Añade otras propiedades CSS según sea necesario */
}</style>  

    <div class="container mt-5">
      
        <!-- Utiliza d-flex y justify-content-end para mover el dropdown a la derecha -->
        <div class="d-flex justify-content-end" >
            <div class="dropdown mt-3">
                <button class="btn btn-primary dropdown-toggle" style="background-color: #D95D39"   type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('Configuración') }}</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="dropdown-item" href="{{ route('logout') }}" 
                           onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
