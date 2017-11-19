<?php
Class ConnectDB extends PDO
{
    public function __construct()
    {
        try {
            parent::__construct('mysql:host=localhost; dbname=tdiw-j6', 'tdiw-j6', 'eemuizoo');
            /*$conn = new PDO('mysql:host=localhost; dbname=tdiw-j6', 'tdiw-j6', 'eemuizoo');*/
            parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $exception) {
            echo "Error al intentar conectar la Base de Datos <br>" . $exception;
        }
    }




}
