
<?php

require 'model/ConnectDB.php';

echo 'llega aqui controller';

require 'model/obtenerCategorias.php';

$result = obtenerCategorias();
echo 'llega aqui controller2';

/*
print_r($result);
die();

*/


include __DIR__.'/../view/categorias.php';
