@include ('master')


    ?>
    <h3>Login para usuarios registrados</h3>
    <form method="post" action="#">
    <label for="username">Usuario:</label>
    <input type="text" id="usuario" name="usuario"><br><br>
    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" value="Iniciar sesión">
    <a  href="register.php" style="text-decoration: none; color: black ; border: 1px; border-style: solid;"> Registrarse</a>
    <?php
    
}else{
    $nombre = $_POST["usuario"];
    $clave = $_POST["password"];
   
    $conexion = mysqli_connect ("localhost", "root", "","tfg") or die ("No se puede conectar con el servidor");

   
   $sql="SELECT contraseña from usuarios where nombre='$nombre'";
$resulconsulta=mysqli_query($conexion,$sql) or die ("Error al hacer la consulta");
    if ($resulconsulta->num_rows === 1) {
        $resultado = $resulconsulta->fetch_assoc();
        $contraseñaCifrada = $resultado["clave"];
        if (password_verify($clave, $contraseñaCifrada)) {
            $_SESSION['logged_in'] = true;
            $_SESSION['nombre'] =$nombre;
            $_SESSION['contraseña']=$clave;
            echo "Bienvenido/a ".$nombre." ya puedes acceder";
            } else {
           
            echo "Contraseña incorrecta";
            }
    }else{
        echo"Usted no esta registrado en la base de datos.Registrese  <a  href='register.php' > Aqui</a>";
    
    }
   
	mysqli_close($conexion);   

}

