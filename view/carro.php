
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
                echo("<table>");

                foreach ($result as $producto): $producto = $producto[0]; ?>
                    <tr>
                        <td>
                            <li class="home-product-name"> <?php echo $producto['nombre_producto']; ?></li>
                            <br/>
                            <li class="home-product"> <a href="#" class="product" id="<?PHP echo $producto['Id_producto']; ?>">
                            <img src="img/productos/<?PHP echo $producto['imagen_producto'] ?>.<?PHP echo $producto['formato_imagen'] ?>"
                            alt="<?PHP echo $producto['nombre_producto'] ?>"></a></li>
                        </td>
                        <td>
                            <li class="precio-producto"> <?php echo $producto['precio_producto']; echo '€' ?></li>
                        </td>
                        <td>
                            <button class="delete" id-product="<?PHP echo $producto['Id_producto'] ?>"> Eliminar</button>
                        </td>
                    </tr>
                    <?php $total+= $producto['precio_producto']; ?>
                <?php endforeach;?>

                    <tr>
                        <td> <p>Total</p> </td>
                        <td><?php echo ($total); echo('€');?></td>
                        <td><a href="index.php?page=pagado"> Pagar</a> </td>
                    </tr>
                <?php echo("</table>");?>
            <?php } ?>
        <br><br>
</section>

<?PHP include __DIR__.'/../view/include/footer.php'; ?>

