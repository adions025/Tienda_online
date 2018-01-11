<?php
session_start();
include __DIR__.'/../model/ConnectDB.php';
include __DIR__.'/../model/obtenerProductos.php';

    $result = [];
    foreach ($_SESSION["trolley"] as $productoId ){
        $result[] = obtenerSoloProducto($productoId);
    }

include __DIR__.'/../view/carro.php';






