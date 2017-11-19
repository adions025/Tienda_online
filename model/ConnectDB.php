<?php


Class ConnectDB extends PDO{

    public function __construct(){

        try{
            parent::__construct('mysql:host=localhost; dbname=tdiw-j6', 'tdiw-j6', 'eemuizoo');
            parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (Exception $exception){
            echo "Error al intentar conectar la Base de Datos <br>" .$exception;
        }

    }
}
/*
    try{
        $conn = new PDO('mysql:host=localhost; dbname=tdiw-j6', 'tdiw-j6', 'eemuizoo');



        $sql= $conn->prepare('SELECT * FROM Usuarios');
        $sql->execute();

        $result = $sql->fetchAll();

        foreach ($result as $key => $value ){

            echo $value['nombre_usuario'];
            echo("<br/>");
        }

        foreach ($result as $key => $value ){

            echo $value['Id_usuario'];
            echo("<br/>");
        }

        foreach ($result as $key => $value ){

            echo $value['email_usuario'];
            echo("<br/>");
        }


    }catch (Exception $e){

        die('Error: ' .$e->getMessage());
    }
*/
?>