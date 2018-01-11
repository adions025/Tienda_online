<?PHP
include __DIR__. '/../view/include/header.php';
include __DIR__.'/../view/include/menu.php';?>

    <section id="main-content">
        <table class="pedidos" border="1">
            <tr>
                <th>Id Pedido Pedidos</th>
                <th>Fecha Pedido</th>
                <th>Usuario Pedido</th>
            </tr>
        <?PHP foreach($result as $pedido): ?>
            <tr>
                <td><?php  echo $pedido['id_pedido']; ?></td>
                <td><?php  echo $pedido['fecha_pedido']; ?></td>
                <td><?php  echo $pedido['nombre_usuario']; ?> </td>
            </tr>

        <?php endforeach;?>
        </table>


    </section>

<?PHP include __DIR__.'/../view/include/footer.php'; ?>