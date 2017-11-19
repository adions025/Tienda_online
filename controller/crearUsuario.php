<?php
/**
 * Created by PhpStorm.
 * User: adonisgonzalez
 * Date: 18/11/17
 * Time: 23:13
 */

    require '../model/ConnectDB.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        ['email' => $email, 'password' => $password] = filter_input_array(INPUT_POST,
        [
            'email' => FILTER_DEFAULT,
            'password' => FILTER_DEFAULT
        ]
        );
    }

