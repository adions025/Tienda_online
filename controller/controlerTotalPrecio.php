<?php
session_start();
include __DIR__.'/../model/ConnectDB.php';
include __DIR__.'/../model/obtenerProductos.php';
$result = [];

foreach ($_SESSION["trolley"] as $productoId ){

    $result[] = obtenerSoloProducto($productoId);
}

foreach ($result as $producto): $producto = $producto[0]; ?>
    <?php $total+= $producto['precio_producto']; ?>
<?php endforeach;?>

<?php echo ($total); echo('€');?>
