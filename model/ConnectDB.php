<?php

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



    }catch (Exception $e){

        die('Error: ' .$e->getMessage());
    }

?>