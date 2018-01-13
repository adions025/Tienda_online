
<?PHP
    include __DIR__. '/../view/include/header.php';
    include __DIR__.'/../view/include/menu.php';
?>

<section id="main-content">
    <div id="carrito"></div>
    <?php
        $total = 0;
        if(empty($_SESSION["trolley"])){
            echo "No hay productos añadidos en tu cesta";
            }else {
                echo("<table class='pedidos'>");
            ?>
            <tr>
                <th>Id producto</th>
                <th>Nombre Producto</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th></th>
            </tr>
                <?php
                foreach ($result as $producto): $producto = $producto[0]; ?>
                    <tr>
                        <td><?php  echo $producto['Id_producto']; ?></td>
                        <td><?php  echo $producto['nombre_producto']; ?></td>
                        <td><img src="img/productos/<?PHP echo $producto['imagen_producto']?>.<?PHP echo $producto['formato_imagen']?>"/></td>
                        <td><?php  echo $producto['precio_producto']; echo("€") ?></td>
                        <td>
                            <button class="delete" id-product="<?PHP echo $producto['Id_producto'] ?>"> Eliminar</button>
                        </td>
                    </tr>
                    <?php $total+= $producto['precio_producto']; ?>
                <?php endforeach;?>
            <?php

            ?>
            <?php echo("</table>");?>
            <br><br>
            <table class="pedidos">
                    <tr>
                        <td> <p>Total</p> </td>
                        <td total="<?php echo ($total);?>"><?php echo ($total); echo('€');?></td>

                    </tr>
            </table>
            <?php } ?>
        <br><br>
    <td><a class="button" href="index.php?page=pagado"> Pagar</a> </td>
</section>

<?PHP include __DIR__.'/../view/include/footer.php'; ?>

