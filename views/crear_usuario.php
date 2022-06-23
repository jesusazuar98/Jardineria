<?php
include_once "../utils/user.php";

if(isset($_POST['usu'])){

    $user=new User($_POST['usu'],$_POST['pass']);
    $user->check_loginuser();
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jardineria: Crear cuenta de usuario</title>
</head>
<body>
<form action="crear_usuario.php" method="POST">

<label for="usu">Nombre de usuario o correo electrónico:</label><br>
    <input type="text" id="usu" name="usu"/><br>
    <label for="pass">Constraseña:</label><br>
    <input type="password" id="pass" name="pass" placeholder="***"/><br><br>
    <input type="submit" value="enviar"/>

</form>

</body>
</html>