<?PHP
include __DIR__. '/../view/include/header.php';
include __DIR__.'/../view/include/menu.php';?>


<section id="main-content">

    <?PHP foreach($result as $pedido): ?>
                <?php  echo $pedido['id_pedido']; ?></a>
                <?php  echo $pedido['fecha_pedido']; ?></a>
                <?php  echo $pedido['nombre_usuario']; ?></a>

    <?php endforeach;?>


</section>

<?PHP include __DIR__.'/../view/include/footer.php'; ?>