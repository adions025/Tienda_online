<?php
echo 'llega aqui al model obtercategorias ';
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
