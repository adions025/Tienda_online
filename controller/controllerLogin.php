<?php
session_start();
include __DIR__.'/../model/ConnectDB.php';
include __DIR__.'/../model/login.php';

    $result = logearUsuario();
    if($result != null) {
        $_SESSION["usuario"] = $result;
    }
    if($result){
        $url = 'index.php';
        header("Location: $url"); //Page redirecting to home.php
    }else{
        include __DIR__.'/../view/loginFail.php';
    }





