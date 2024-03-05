
<?php
if (!isset($_SESSION['logged_in'])) {
    ?>
    <a class="login" href="{{ url('login.php') }}">Iniciar Sesion</a>
    <a  class="register" href="{{ url('register.php') }}">Registrarse</a>

   <?php
}else{
?>
<div>
    <img src="{{ asset('images/icono.png') }}" onclick="toggleMenu()" alt="icono" class="dropdown-imgIcono" tabindex="0">
   
    <div id="dropdown-menu" style="display: none;">
        <!-- Contenido del menú desplegable -->
        <p style="text-align:end;">Usuario:<?php print $_SESSION['nombre']?><br>
            <a class="config" href="{{"config"}}">Configuracion</a>
            <form style="text-align:end;" method="get" action="">
            <input  type="submit" name="eliminar_sesion" value="Cerrar Sesión">
            </form> 
        </p>
    
     
    </div>
</div>
<?php
}
?>
<script>
    var showMenu = false;

    function toggleMenu() {
        var menu = document.getElementById('dropdown-menu');
        showMenu = !showMenu;
        menu.style.display = showMenu ? 'block' : 'none';
    }

    function handleMenuItemClick() {
        var menu = document.getElementById('dropdown-menu');
        showMenu = false;
        menu.style.display = 'none';
    }
</script>