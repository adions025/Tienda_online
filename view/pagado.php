<?PHP
include __DIR__. '/../view/include/header.php';
include __DIR__.'/../view/include/menu.php';?>

<section id="main-content">
    <?php
    if(empty($_SESSION["usuario"])){
        echo("Primero debes registrarte o iniciar sesión para pagar");
        echo('<br>');
        echo('<a href="index.php?page=login"> Iniciar sesión </a> &nbsp &nbsp');
        echo('<a href="index.php?page=registro"> Registrarse</a>');
    }else{
        echo("tu compra se ha realizado con exito ");
    }
    ?>

</section>

<?PHP include __DIR__.'/../view/include/footer.php'; ?>
