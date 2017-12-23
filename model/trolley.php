<?php

function obtenerProductosTrolley($Id_producto)
{
    $objData = new ConnectDB();
    $sql = $objData->prepare('SELECT * FROM Productos WHERE Id_producto = :Id_producto');
    $sql->execute();
    while($result = $sql->fetch(PDO::FETCH_ASSOC)){
        $datos[]=$result;
    }
    return $datos;
}