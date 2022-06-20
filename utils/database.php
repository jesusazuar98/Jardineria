<?php
class Database{


    private $dominio;
    private $db;
    private $username;
    private $password;
    private $charset;

    public function __construct(){
        $this->dominio='localhost';
        $this->db='jardineria';
        $this->username='jesus';
        $this->password='jesusms10';
        $this->charset='utf8mb4';
    }


    public function conectar() {

        try{
            $connect="mysql:host=".$this->dominio.";dbname=".$this->db.";charset=".$this->charset;
            
            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false];

            $pdo=new PDO($connect,$this->username,$this->password,$options);
            return $pdo;
        }catch(PDOException $e){
            print_r("Error connection: ".$e->getMessage());

        }
    
    
    }




}


?>


