<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesion</title>
</head>
<body>

    <h1>Inicio de sesion</h1>
    <br>


    <form action="inicio_sesion.php" id="form_session" method="POST">



        <label for="usu">Nombre de usuario o correo electrónico:</label><br>
        <input type="text" id="usu" name="usu"/><br>
        <label for="pass">Constraseña:</label><br>
        <input type="password" id="pass" name="pass" placeholder="***"/><br><br>
        <input type="submit" value="Iniciar Sesion"/>


    </form>



    <br>
    <a href="index.php">Volver al incio</a>




</body>
</html>