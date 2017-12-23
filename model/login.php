<?php
function logearUsuario()
{
    try {

        echo "---llega a logear usuario 2222---";
        $objData = new ConnectDB();

        $password_usuario = $_POST['password'];

        $email_usuario = $_POST['email'];

        $stmt = $objData->prepare('SELECT Id_usuario, nombre_usuario, password_usuario FROM Usuarios WHERE email_usuario = :email_usuario');
        $stmt->bindParam('email_usuario', $email_usuario, PDO::PARAM_STR);


        $stmt->execute();

        echo "---llega a logear usuario 4444---";


        $count=$stmt->rowCount();
        $data=$stmt->fetch(PDO::FETCH_OBJ);
        $objData = null;

        if($count == 1) {
            $correct = password_verify($password_usuario, $data->password_usuario);
            if ($correct) {
                return ['id' => $data->Id_usuario, 'name' => $data->nombre_usuario]; // Guardamos id de sesion usuario
                echo("logeadooooo0oo");
                return $correct;
            } else {
                echo("DATOS INCORRECTOS");
                return null;
            }
        }
        return null;


    } catch (Exception $exception) {
        echo "Error al login <br>" . $exception;
    }
}
