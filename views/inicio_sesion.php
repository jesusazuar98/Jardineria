<?php
    include_once 'user.php';
?>

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

        <?php
            if (isset($_POST['usu'])){
                
                $nomusu = $_POST['usu'];
                $password = $_POST['pass'];

                $campos = array();

                if ($nomusu ==""){
                    array_push($campos,"El campo nombre no puede estar vacio");
                };

                if (strlen($password)<8){
                    array_push($campos,"El campo password no puede estar vacio ni tener menos de 8 caracteres");
                };


                if (count($campos)>0){
                    echo "<div class='error'>";
                    echo "<ul>";
                    for ($i=0;$i<count($campos);$i++){
                        echo "<li>".$campos[$i]."</li>";
                    };
                    echo "</ul>";
                }else{

                    echo "<div class='correcto'> <p>Datos correctos</p>";
                };



            };
        ?>

        <label for="usu">Nombre de usuario o correo electrónico:</label><br>
        <input type="text" id="usu" name="usu"/><br>
        <label for="pass">Constraseña:</label><br>
        <input type="password" id="pass" name="pass" placeholder="***"/><br><br>
        <input type="submit" value="Iniciar Sesion"/>


    </form>

    <?php
        $db= new Database();
        $db->conectar();
    ?>

    <br>
    <a href="index.php">Volver al incio</a>




</body>
</html>