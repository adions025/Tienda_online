<?PHP
include __DIR__. '/../view/include/header.php';
include __DIR__.'/../view/include/menu.php';?>

<section id="main-content-categorias">
    <table class="pedidos">
        <tr>
            <th>Nombre Producto</th>
            <th>Imagen</th>
            <th>Descripcion Corta</th>
            <th>Id Categoria</th>
            <th>Precio</th>
        </tr>
        <?PHP foreach($productos as $producto): ?>
            <tr>
                <td><?php  echo $producto['nombre_producto']; ?></td>
                <td><img src="img/productos/<?PHP echo $producto['imagen_producto']?>.<?PHP echo $producto['formato_imagen']?>"/><td>
                <td><?php  echo $producto['descripcion_corta_producto'];?></td>
                <td><?php  echo $producto['fk_categoria'];?></td>
                <td><?php  echo $producto['precio_producto']; echo("€") ?></td>
            </tr>
        <?php endforeach;?>
    </table>
    <br>
    <a class="button" href="index.php?page=adminViewAdd">Añadir Producto</a></li>
</section>

<?PHP include __DIR__.'/../view/include/footer.php'; ?>