
<?php
      require '../model/ConnectDB.php';

        echo "llega a crear usuario";

        require '../model/createUser.php';
        insertarUsuario();



/*
if($_POST["nombre"]=="julanito"){
    $response["valid"]=false;
}else{
    $response["valid"]=true;
}
echo json_encode($response);
?>
*/