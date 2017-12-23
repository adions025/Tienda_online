<?php
session_start();
require '../model/ConnectDB.php';

echo "---llega a logear usuario---";

require '../model/login.php';

    $result = logearUsuario();
    if($result != null) {
        $_SESSION["usuario"] = $result;
    }

    if($result){
        $url = '../index.php';
        header("Location: $url"); // Page redirecting to home.php
    }



