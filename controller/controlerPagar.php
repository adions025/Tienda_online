<?php
session_start();
include __DIR__.'/../model/ConnectDB.php';
include __DIR__.'/../model/pedidos.php';

/*print_r($_SESSION["usuario"]["name"]);*/

    if(empty($_SESSION["usuario"])){

        include __DIR__.'/../view/pagado.php';
    }else{
        $result = insertarPedido();
        include __DIR__.'/../view/pagado.php';
    }








