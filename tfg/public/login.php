<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">

</head>
<body>
<header class="header">
        <a href="../public/">
            <img  src="images/Logo.png" alt="Logo" class="logo"></img>
        </a>
        <h1>&nbsp;&nbsp;Libroteca</h1>  
        
    </header>


    <div class="contenedor">
   

<main>
<?php
   if (isset($_POST['submit'])) {
        
    header("Location: register.php");
    exit; 
}
if (!$_REQUEST) {
    ?>
    <h3>Login para usuarios registrados</h3>
    <form method="post" action="#">
    <label for="username">Usuario:</label>
    <input type="text" id="usuario" name="usuario"><br><br>
    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" value="Iniciar sesión">
    <?php
 
    ?>
    <form method="post">
        
        <button type="submit" name="submit">Registrarse</button>
    </form>
    <?php
}else{
    $nombre = $_POST["usuario"];
    $clave = $_POST["password"];

    $conexion = mysqli_connect ("localhost", "root", "","tfg") or die ("No se puede conectar con el servidor");
    
   
   
   $sql="SELECT contraseña from usuarios where nombre='$nombre'";
$resulconsulta=mysqli_query($conexion,$sql) or die ("Error al hacer la consulta");
    if ($resulconsulta->num_rows === 1) {
        $resultado = $resulconsulta->fetch_assoc();
        $contraseñaCifrada = $resultado["contraseña"];
        if (password_verify($clave, $contraseñaCifrada)) {
            $_SESSION['logged_in'] = true;
            $_SESSION['nombre'] =$nombre;
            $_SESSION['contraseña']=$clave;
            echo "Bienvenido/a ".$nombre." ya puedes acceder";
            ?>
            <a href="../public/">Volver al inicio</a>
            <?php
            } else {
           
            echo "Contraseña incorrecta";
            }
    }else{
        echo"Usted no esta registrado en la base de datos.Registrese  <a  href='register.php' > Aqui</a>";
    
    }
   
	mysqli_close($conexion);   

}

  
?>
    </form>  
</main> 
  
</div>

</body>
</html>