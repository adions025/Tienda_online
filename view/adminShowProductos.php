<?PHP
include __DIR__. '/../view/include/header.php';
include __DIR__.'/../view/include/menu.php';?>


    <section id="main-content-categorias">


        <?PHP foreach($productos as $producto): ?>
            <li class="home-product-name"> <?php  echo $producto['nombre_producto']; ?></li>

        <?php endforeach;?>

        <a href="index.php?page=adminAdd">Añadir Producto</a></li>


    </section>

<?PHP include __DIR__.'/../view/include/footer.php'; ?>