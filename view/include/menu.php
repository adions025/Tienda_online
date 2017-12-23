
</head>
<body>
<header id="main-header">
    <a id="logo-header" href="index.php?page=home">
        <span class="nombre-tienda">MANOLO'S</span>
    </a>
</header>

<!-- ############################# MENU ################################### -->
<section id="menu">
       <nav>
        <ul>
            <li><a href="index.php?page=home"> Inicio </a></li>
            <li><a href="index.php?page=categorias"> Categorias </a></li>
            <!--<li><a href="index.php?page=productos"> Productos </a></li> -->
            <?php
            if(isset($_SESSION['usuario'])) {
                
            } else {
                echo '<li><a href="index.php?page=login"> Login </a></li>';
            }?>
            <li><a href="index.php?page=registro"> Registro </a></li>

        </ul>
    </nav>
</section>
<!-- ###################################################################### -->
