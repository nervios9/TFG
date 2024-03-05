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
if (!$_REQUEST) {
    ?>
<h2>Registro de Usuario</h2>

<form action="#" method="post">
  <label for="username">Nombre de Usuario:</label><br>
  <input type="text" id="username" name="username"><br>

  <label for="password">Contraseña:</label><br>
  <input type="password" id="password" name="password"><br>

  <label for="confirm_password">Confirmar Contraseña:</label><br>
  <input type="password" id="confirm_password" name="confirm_password"><br>

  <input type="submit" value="Registrar">
</form>

<?php
}else{
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    if ($password !== $confirm_password) {
        echo "Las contraseñas no coinciden. Por favor, vuelva a intentarlo.";
       
         header("Location: register.php");
        exit;
    }else{
       
$conexion = mysqli_connect ("localhost", "root", "","tfg") or die ("No se puede conectar con el servidor");


        $contraseñaEncriptada= password_hash($password,PASSWORD_BCRYPT);
        $instruccion = "INSERT into usuarios (nombre, contraseña) values ('$username','$contraseñaEncriptada')";
        $consulta = mysqli_query($conexion, $instruccion) or exit("Fallo en la inserción");
        echo "Usuario $username insertado con éxito.<br><br>";
        echo '<a  href="login.php" style="text-decoration: none; color: black ; border: 1px; border-style: solid;"> Inicia Sesion</a>';
    }
    mysqli_close ($conexion);
}
?>
</main> 
   
</div>

</body>
</html>