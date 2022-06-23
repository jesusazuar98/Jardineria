<?php
include_once "database.php";

class User extends Database{


    private $username;
    private $password;
    private $pass_cifrado;

    function __construct( $user, $pass ){
        
        $this->username = $user;
        $this->password = $pass;
        


    }

    function check_loginuser(){


        $connect=$this->connect();
        $sql = "SELECT * FROM empleados WHERE Email= :login AND password= :pass";
        $resultado=$connect->prepare($sql);
        $resultado->bindValue(':login',$this->username,PDO::PARAM_STR);
        $resultado->bindValue(':pass',$this->password,PDO::PARAM_STR);
        $resultado->execute();

        $n_registro=$resultado->rowCount();

        if ($n_registro!=0){
            
            session_start();
            $_SESSION['usuario']=$this->username;

            header("location:../views/usuarios_registrados1.php");

        }else{

            header("location:../views/inicio_sesion.php");
        }

    }


    function signup_emple() {

        $pass_cifrado=password_hash($this->password,PASSWORD_DEFAULT);
        $connect=$this->connect();
        
        $sql = "SELECT * FROM empleados WHERE Email= :login AND password= :pass";
        $resultado=$connect->prepare($sql);
        $resultado->bindValue(':login',$this->username,PDO::PARAM_STR);
        $resultado->bindValue(':pass',$this->password,PDO::PARAM_STR);
        $resultado->execute();


    }



}





?>

