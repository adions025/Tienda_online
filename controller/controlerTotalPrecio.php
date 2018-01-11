<?php
session_start();
include __DIR__.'/../model/ConnectDB.php';
include __DIR__.'/../model/obtenerProductos.php';

$total = 0;
foreach ($_SESSION['trolley'] as $producto) {
    $result = obtenerSoloProducto($producto);
    $total += $result[0]['precio_producto'];

}

echo('Total: '); echo($total); echo("€"); ?>



