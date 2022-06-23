<?php
class Database{


    private $dominio ='localhost';
    private $db='jardineria';
    private $username='jesus';
    private $password='jesusms10';

    public function connect(){

        try{
            $connect=new PDO("mysql:host=".$this->dominio.";dbname=".$this->db,$this->username,$this->password);

            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $connect;
        
        }catch(PDOException $e){

            die("Error: " . $e->getMessage());
        }
    }

}




?>


