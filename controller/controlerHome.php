<?php
require 'model/ConnectDB.php';
require 'model/obtenerCategorias.php';

$result = obtenerCategorias();

include __DIR__.'/../view/home.php';

