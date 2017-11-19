<?php
/**
 * Created by PhpStorm.
 * User: adonisgonzalez
 * Date: 10/11/17
 * Time: 10:56
 */

function obtenerCategorias(){

    $sql= $conn->prepare('SELECT * FROM Categorias');
    $sql->execute();


   /* while($result = $sql->fetch())*/

$result = $sql->fetchAll();

foreach ($result as $key => $value ){

    echo $value['Id_categoria'];
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

?>