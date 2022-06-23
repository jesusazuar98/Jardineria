<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    session_start();

    if(!isset($_SESSION['usuario'])){

        header('location:inicio_sesion.php');

    }



?>
<h1>Zona empleados registrados</h1>
<?php

echo "Hola: ".$_SESSION['usuario']."<br><br>";
?>
<a href="../utils/cierre_sesion.php">Cerrar sesion</a>

<a href="usuarios_registrados2.php">Usuarios2</a>
<a href="usuarios_registrados3.php">Usuarios3</a>




</body>
</html>