<?php
session_start();
require '../model/ConnectDB.php';
require '../model/login.php';

    $result = logearUsuario();
    if($result != null) {
        $_SESSION["usuario"] = $result;
    }
    if($result){
        $url = 'index.php';
        header("Location: $url"); // Page redirecting to home.php
    }else{
        include __DIR__.'/../view/loginFail.php';
       /* $url = '/~tdiw-j6/view/loginFail.php'; //loginfail_page
        header("Location: $url"); // Page redirecting to home.php*/
    }



