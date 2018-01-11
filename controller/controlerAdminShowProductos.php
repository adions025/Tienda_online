<?php
include __DIR__.'/../model/ConnectDB.php';
include __DIR__.'/../model/obtenerProductos.php';

$productos = obtenerProductos();

include __DIR__.'/../view/adminShowProductos.php';

