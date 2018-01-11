
<?php
session_start();
require '../model/ConnectDB.php';
include __DIR__.'/../model/obtenerProductos.php';

if(!isset($_SESSION["trolley"])){
    $_SESSION["trolley"] = array();

}
    $response["valid"]=false;

if(isset($_POST["idProduct"], $_POST["addDel"], $_POST['precio'])){
    if(validIdProduct($_POST["idProduct"])){
        if($_POST["addDel"]){
            $_SESSION["trolley"][]=$_POST["idProduct"];
            $_SESSION["trolley"]['precio']=$_POST["precio"] + $_SESSION["trolley"]['precio'];
            $response["valid"]=true;
        }else{
            deleteItemTrolley($_POST["idProduct"]);
        }
    }
}
$response["trolley"]=$_SESSION["trolley"];

/*echo json_encode($response);*/

/*
        $total = 0;
        if(empty($_SESSION["trolley"])){
            echo "NO HAY PRODUCTOS EN TU CESTA";
        }else {
            foreach ($result as $producto): $producto = $producto[0]; ?>
                <?php $total += $producto['precio_producto']; ?>
            <?php endforeach;
            $_SESSION["trolley"]['total'] = $total;

        }
*/


function validIdProduct($id){
    return true;
}


function deleteItemTrolley($id){

}
if ($_GET["delete"]){
    $result = array_search($_GET["delete"],$_SESSION["trolley"]);
    unset($_SESSION["trolley"][$result]);
   /* print_r($_SESSION["trolley"]);*/
}




?>