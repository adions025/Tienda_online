</head>

<body>

<header id="main-header">
    <a id="logo-header" href="index.php?page=home"> <span class="nombre-tienda">MANOLO'S</span></a>
</header>

<!-- ############################# MENU ################################### -->
<section id="menu">
   <nav class="navmenu">
        <ul>
            <li><a href="index.php?page=home"> Inicio </a></li>
            <li><a href="index.php?page=categorias"> Categorias </a></li>
                <?php
                    if(isset($_SESSION['usuario'])) {
                        ?> <li><a href="#">  <?php echo "".$_SESSION['usuario']['name'];?><span class="icon-user"> </a>
                        <ul>

                            <li></li>

                            <?php echo '<li><a href="index.php?page=logout">Logout<span class="icon-logout"></a></li>

                        </ul></li>';
                            ?>

                        <?php /* echo ("tienes productos: ");
                        echo (sizeof($_SESSION['trolley'])); */
                    } else {
                        echo '<li><a href="index.php?page=login"> Login<span class="icon-down-open"></span> </a>
                        <ul>
                            <li class="submenu"><a href="index.php?page=registro">Registro <span class="icon-address-card-o"></span></a></li>
                             
                        </ul> </li>';
                    }
                ?>

            <li><a id="cabasmenu" href="index.php?page=carro"> <?php echo (sizeof($_SESSION['trolley'])); ?><span class="icon-basket"></span>
                </a>
            <ul>


                <li><a id="cabasTotal" href="index.php?page=registro">Total: <?php echo ($total); echo('€');?></span></a></li>
            </ul></li>

                    <?php
                    if($_SESSION['usuario']['rol']==2){
                        echo('<li><a href="#">Administrar</a>
                        <ul>
                            <li> <a href="index.php?page=adminPedidos">Pedidos</a></li>
                             <li> <a href="index.php?page=adminProductos">Productos</a></li>
</ul>
                        </li>');
                    }     ?>

                </ul>


   </nav>
</section>
<!-- ###################################################################### -->
