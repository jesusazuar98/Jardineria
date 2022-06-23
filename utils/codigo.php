
<?php

try{

    $connect=new PDO("mysql:host=localhost; dbname=jardineria", 'jesus','jesusms10');

    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM empleados WHERE Email= :login AND password= :pass";

    $resultado=$connect->prepare($sql);

    $login=$_POST["usu"];
    $pass=$_POST["pass"];

    $resultado->bindValue(':login',$login);
    $resultado->bindValue(':pass',$pass);

    $resultado->execute();

    $n_registro=$resultado->rowCount();

    if($n_registro!=0){

        session_start();

        $_SESSION['usuario']=$login;


        header("location:../views/usuarios_registrados1.php");

    }else{
        header("location:../views/inicio_sesion.php");
    }



}catch(PDOException $e){

    die("Error: " . $e->getMessage());
}



?>