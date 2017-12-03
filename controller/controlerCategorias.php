
<?php

require 'model/ConnectDB.php';
require 'model/obtenerCategorias.php';

$result = obtenerCategorias();


/*
print_r($result);
die();

*/


include __DIR__.'/../view/categorias.php';
