<?php

echo "estoy aqui";
function insertarUsuario()
{
    $objData = new ConnectDB();
    echo "estoy en Conext2";
    /*

    $nombre_usuario = $_POST['nombre'];
    $email_usuario = $_POST['email'];

    $stmt = $objData->prepare('INSERT INTO prueba (nombre_usuarios,email_usuarios) '
        . 'VALUES (:nombre_usuario, :email_usuario)');
    $stmt->bindParam('nombre_usuario', $nombre_usuario);
    $stmt->bindParam('email_usuario', $email_usuario);

    echo "estoy en Conext3";
    $stmt->execute();
    echo "estoy en Conext4";
*/
    $nombre_usuario = $_POST['nombre'];
    $password_usuario = $_POST['password'];
    $email_usuario = $_POST['email'];
    $direccion_usuario = $_POST['address'];
    $poblacion_usuario = $_POST['ciudad'];
    $cp_usuario = $_POST['cp'];
    $usuario_activo = 0;


    $stmt = $objData->prepare('INSERT INTO prueba (nombre_usuario, password_usuario, email_usuario, direccion_usuario, poblacion_usuario, cp_usuario, usuario_activo) VALUES(:nombre_usuario, :password_usuario, :email_usuario, :direccion_usuario, :poblacion_usuario, :cp_usuario, :usuario_activo)');

    $stmt->bindParam("nombre_usuario", $nombre_usuario,PDO::PARAM_STR) ;

    $password_usuario= hash('sha256', $password_usuario); //Password encryption

    $stmt->bindParam("hash_password", $password_usuario,PDO::PARAM_STR);

    $stmt->bindParam("email_usuario", $email_usuario,PDO::PARAM_STR) ;

    $stmt->bindParam("direccion_usuario", $direccion_usuario,PDO::PARAM_STR) ;

    $stmt->bindParam("poblacion_usuario", $poblacion_usuario,PDO::PARAM_STR) ;

    $stmt->bindParam("cp_usuario", $cp_usuario,PDO::PARAM_STR) ;

    $stmt->bindParam("usuario_ativo", $usuario_activo,PDO::PARAM_STR) ;


    echo "estoy en Conext3";

    $stmt->execute();
   /*var_dump($stmt->execute());*/
    /*var_dump($stmt);*/
    echo "estoy en Conext4";
}
?>
