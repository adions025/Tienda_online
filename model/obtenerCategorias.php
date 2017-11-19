<?php
/**
 * Created by PhpStorm.
 * User: adonisgonzalez
 * Date: 10/11/17
 * Time: 10:56
 */
    echo 'llega aqui al model obtercategorias';
function obtenerCategorias()
{

    $objData = new ConnectDB();
    $sql = $objData->prepare('SELECT * FROM Categoria');

    $sql->execute();

    while($result = $sql->fetch(PDO::FETCH_ASSOC)){
        $datos[]=$result;
    }
    return $datos;
}
/*
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
*/

?>