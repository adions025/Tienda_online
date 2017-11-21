<?php

$Id_producto= $_GET['Id_producto'];

include __DIR__.'/../model/ConnectDB.php';
include __DIR__.'/../model/obtenerProductos.php';

$result = obtenerSoloProducto($Id_producto);

include __DIR__.'/../view/soloProducto.php';

