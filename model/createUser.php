<?php

function insertarUsuario()
{
    $objData = new ConnectDB();
    $nombre_usuario = htmlentities($_POST['nombre'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $password_usuario = htmlentities($_POST['password'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $email_usuario = htmlentities($_POST['email'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $direccion_usuario = htmlentities($_POST['address'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $poblacion_usuario = htmlentities($_POST['ciudad'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $cp_usuario = htmlentities($_POST['cp'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $usuario_activo = 0;

    $stmt = $objData->prepare('INSERT INTO Usuarios (nombre_usuario, password_usuario, email_usuario, direccion_usuario, poblacion_usuario, cp_usuario, usuario_activo) '
        . 'VALUES (:nombre_usuario, :password_usuario, :email_usuario, :direccion_usuario, :poblacion_usuario, :cp_usuario, :usuario_activo)');

    $stmt->bindParam('nombre_usuario', $nombre_usuario);
    $stmt->bindParam('email_usuario', $email_usuario);

    $password_usuario = password_hash($password_usuario, PASSWORD_BCRYPT);
    $stmt->bindParam("password_usuario", $password_usuario,PDO::PARAM_STR);
    $stmt->bindParam('direccion_usuario', $direccion_usuario);
    $stmt->bindParam('poblacion_usuario', $poblacion_usuario);
    $stmt->bindParam('cp_usuario', $cp_usuario);
    $stmt->bindParam('usuario_activo', $usuario_activo);


    $stmt->execute();
    echo("Se ha regustrado con exito");

}
?>
