<?php
function obtenerProductos()
{
    $objData = new ConnectDB();
    $sql = $objData->prepare('SELECT * FROM Productos');
    $sql->execute();
    while($result = $sql->fetch(PDO::FETCH_ASSOC)){
        $datos[]=$result;
    }
    return $datos;
}

function obtenerProductosdeCategorias($Id_categoria)
{
    $objData = new ConnectDB();
    $sql = $objData->prepare('SELECT * FROM Productos WHERE fk_categoria = :Id_categoria');
    $sql->bindParam(':Id_categoria', $Id_categoria);
    $sql->execute();
    while($result = $sql->fetch(PDO::FETCH_ASSOC)){
        $datos[]=$result;
    }
    return $datos;
}


