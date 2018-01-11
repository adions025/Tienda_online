<?php
$Id_categoria = $_GET['Id_Categoria'];
include __DIR__.'/../model/ConnectDB.php';
include __DIR__.'/../model/obtenerProductos.php';

$result = obtenerProductosdeCategorias($Id_categoria);

include __DIR__.'/../view/productos.php';

