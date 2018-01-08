<?php
function insertarPedido()
{
    $objData = new ConnectDB();
    $fk_usuario = $_SESSION['usuario']['id'];

    $stmt = $objData->prepare('INSERT INTO Pedidos (fk_usuario) VALUES (:fk_usuario)');
    $stmt->bindParam('fk_usuario', $fk_usuario);
    $stmt->execute();

    $sql = $objData->prepare('SELECT max(id_pedido) FROM Pedidos');
    $sql->execute();
    $result = $sql->fetch(PDO::FETCH_ASSOC);
    /*print_r($result);*/
    foreach ($_SESSION["trolley"] as $productoId ){
        $stmt = $objData->prepare('INSERT INTO Linea_pedidos (fk_producto, fk_pedidos, cantidad) VALUES (:fk_producto, :fk_pedidos, :cantidad)');
        $stmt->bindParam('fk_producto', $productoId);
        $stmt->bindParam('fk_pedidos', $result["max(id_pedido)"]);
        $stmt->bindParam('cantidad', $cantidad = 1);
        $stmt->execute();
        unset($_SESSION["trolley"]);
    }
}
?>
