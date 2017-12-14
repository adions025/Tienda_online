<?php
function($email_usuario, $password_usuario){
    try{

        $objData = new ConnectDB();

        $password_usuario = $_POST['password'];
        $email_usuario = $_POST['email'];

        $password_usuario = password_hash($password_usuario, PASSWORD_BCRYPT);

        $stmt = $objData->prepare("SELECT Id_usuario FROM Usuarios WHERE (email_usuario=:email_usuario) AND $password_usuario=:$password_usuario");

        $stmt->bindParam("$email_usuario", $usernameEmail,PDO::PARAM_STR) ;
        $stmt->bindParam("$password_usuario", $password_usuario,PDO::PARAM_STR);

        $stmt->execute();

        $count=$stmt->rowCount();
        $data=$stmt->fetch(PDO::FETCH_OBJ);
        $objData = null;

        if($count)
        {
            $_SESSION['Id_usuario']=$data->Id_usuario; // Guardamos sesion usuario
            return true;
        }
        else
        {
            return false;
        }

        }catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }


}