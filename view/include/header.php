<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>MANOLO's Store</title>
    <!--<script src="js/function.js"> </script> -->
    <!-- <link rel="stylesheet" type="text/css" href="/view/resources/css/style.css">  -->
    <link rel="stylesheet" type="text/css" href="http://deic-dc0.uab.cat/~tdiw-j6/view/resources/css/header.css"">
    <link rel="stylesheet" type="text/css" href="http://deic-dc0.uab.cat/~tdiw-j6/view/resources/css/style.css"">


</head>

<body>
    <?php $inicio_path= 'http://deic-dc0.uab.cat/~tdiw-j6/index.php';?>
    <?php $registro_path= 'http://deic-dc0.uab.cat/~tdiw-j6/view/registro.php';?>
    <?php $productos_path= 'http://deic-dc0.uab.cat/~tdiw-j6/view/productos.php';?>


    <header id="main-header">
        <a id="logo-header" href="#">
            <span class="nombre-tienda">MANOLO'S</span>
        </a>
    </header>


    <!-- ############################# MENU ################################### -->
    <section id="menu">
        <nav>
                <ul>
                    <li> <a href="<?php echo $inicio_path ?>">Inicio </a></li>
                    <li> <a href="<?php echo $registro_path ?>">Registro </a></li>
                    <!--<li class="<?php echo $pagina == 'nosotros' ? 'active' : ''; ?>"><a href="?p=nosotros">Nosotros</a></li> -->
                    <li><a href="index.php?page=productos"> Productos </a></li>
                </ul>
        </nav>
    <!-- ###################################################################### -->

    </section>

