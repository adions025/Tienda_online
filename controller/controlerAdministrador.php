<?php


include __DIR__.'/../model/ConnectDB.php';

include __DIR__.'/../model/obtenerProductos.php';


$result = obtenerPedidos();


include __DIR__.'/../view/administracion.php';



