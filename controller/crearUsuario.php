<?php

 require '../model/ConnectDB.php';

 echo "llega a crear usuario";

 require '../model/createUser.php';




    /*$objData = new ConnectDB();*/
    insertarUsuario();

echo "llega a crear usuario555";





    /*
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        ['email' => $email, 'password' => $password] = filter_input_array(INPUT_POST,
        [
            'email' => FILTER_DEFAULT,
            'password' => FILTER_DEFAULT
        ]
        );
    }
    */
?>
