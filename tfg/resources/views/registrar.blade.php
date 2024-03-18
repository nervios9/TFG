@include ('master')

    <h1>Crear Usuario</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form method="POST" action="{{ route('registrar') }}">
        @csrf
    
        <div>
            <label for="name">Nombre de usuario</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
            @error('name')
                <span role="alert">{{ $message }}</span>
            @enderror
        </div>
    
        <div>
            <label for="password">Contraseña</label>
            <input id="password" type="password" name="password" required autocomplete="new-password">
            @error('password')
                <span role="alert">{{ $message }}</span>
            @enderror
        </div>
    
        <div>
            <label for="password_confirmation">Confirmar contraseña</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
        </div>
    
        <button type="submit">Registrar</button>
    </form>
</body>
</html>