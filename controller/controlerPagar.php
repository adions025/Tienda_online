<?php
session_start();
include __DIR__.'/../model/ConnectDB.php';
include __DIR__.'/../model/pedidos.php';

    if(empty($_SESSION["usuario"])){
        include __DIR__.'/../view/pagado.php';
    }else{
        $result = insertarPedido();
        include __DIR__.'/../view/pagado.php';
    }








