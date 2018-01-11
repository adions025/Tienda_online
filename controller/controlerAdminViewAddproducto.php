<?php
include __DIR__.'/../model/ConnectDB.php';
include __DIR__.'/../model/obtenerCategorias.php';

$categorias = obtenerCategorias();

include __DIR__.'/../view/adminAddProducto.php';
