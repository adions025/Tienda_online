

<?php
/*include __DIR__.'/../view/include/menu.php';*/ /* PREGUNTAR SI SE PUEDE INCLUIR EL MENU AQUI*/

require 'model/ConnectDB.php';
require 'model/obtenerCategorias.php';
$result = obtenerCategorias();

include __DIR__.'/../view/home.php';

