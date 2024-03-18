@include ('master')


<form method="POST" action="{{ route('login') }}">
    @csrf

    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
    </div>

    <div>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required>
    </div>

    <div>
        <button type="submit">Iniciar sesión</button>
    </div>
</form>