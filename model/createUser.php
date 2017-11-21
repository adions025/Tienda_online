<?php

echo "estoy aqui";
function insertarUsuario()
{
    $objData = new ConnectDB();
    echo "estoy en Conext2";

    $nombre_usuario = $_POST['nombre'];
    $email_usuario = $_POST['email'];

    $stmt = $objData->prepare('INSERT INTO prueba (nombre_usuarios,email_usuarios) '
        . 'VALUES (:nombre_usuario, :email_usuario)');
    $stmt->bindParam('nombre_usuario', $nombre_usuario);
    $stmt->bindParam('email_usuario', $email_usuario);

    echo "estoy en Conext3";
    $stmt->execute();
    echo "estoy en Conext4";

}
?>
