
<?php
session_start();
require '../model/ConnectDB.php';

if(!isset($_SESSION["trolley"])){
    $_SESSION["trolley"] = array();
}

$response["valid"]=false;

if(isset($_POST["idProduct"], $_POST["addDel"])){
    if(validIdProduct($_POST["idProduct"])){
        if($_POST["addDel"]){
            $_SESSION["trolley"][]=$_POST["idProduct"];
            $response["valid"]=true;
        }else{
            deleteItemTrolley($_POST["idProduct"]);
        }
    }
}
$response["trolley"]=$_SESSION["trolley"];
echo json_encode($response);


function validIdProduct($id){
    return true;
}

function deleteItemTrolley($id){

}
?>
