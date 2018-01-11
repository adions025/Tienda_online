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

function obtenerSoloProducto($Id_producto)
{
    $objData = new ConnectDB();
    $sql = $objData->prepare('SELECT * FROM Productos WHERE Id_producto = :Id_producto');
    $sql->bindParam(':Id_producto', $Id_producto);
    $sql->execute();
    while($result = $sql->fetch(PDO::FETCH_ASSOC)){
        $datos[]=$result;
    }
    return $datos;
}


function obtenerPedidos()
{
    $objData = new ConnectDB();
    $Id_usuario = $_SESSION["usuario"]["id"];
    $sql = $objData->prepare('SELECT * FROM Pedidos JOIN Usuarios on Pedidos.fk_usuario = Usuarios.Id_usuario ORDER BY fecha_pedido DESC ');
    $sql->bindParam(':Id_usuario', $Id_usuario);

    $sql->execute();
    while($result = $sql->fetch(PDO::FETCH_ASSOC)){
        $datos[]=$result;
    }

    return $datos;

}


function insertarProducto($filename, $ext)
{

    $objData = new ConnectDB();

    $nombre_producto = $_POST['nombre_producto'];
    $descripcion_producto = $_POST['descripcion_producto'];
    $descripcion_corta_producto = $_POST['descripcion_corta_producto'];
    $precio_producto = $_POST['precio_producto'];
    $categoria = $_POST["categoria"];


    $stmt = $objData->prepare('INSERT INTO Productos (nombre_producto, imagen_producto, formato_imagen, descripcion_producto, descripcion_corta_producto, precio_producto, fk_categoria) '
        . 'VALUES (:nombre_producto, :imagen_producto, :formato_imagen, :descripcion_producto, :descripcion_corta_producto, :precio_producto, :fk_categoria)');

    $stmt->bindParam('nombre_producto', $nombre_producto);
    $stmt->bindParam('imagen_producto', $filename);
    $stmt->bindParam('formato_imagen', $ext);
    $stmt->bindParam('descripcion_producto', $descripcion_producto);
    $stmt->bindParam('descripcion_corta_producto', $descripcion_corta_producto);
    $stmt->bindParam('precio_producto', $precio_producto);
    $stmt->bindParam('fk_categoria', $categoria);

    $stmt->execute();

    //echo("Se ha insertado con exito el producto");

}

