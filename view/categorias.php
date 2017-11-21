    <!--<title>Categorias</title>   /* PREGUNTAR SI PONER title en cada pag-->
    <?php include __DIR__.'/include/menu.php'?>

    <section id="main-content-categorias">
        <header>
            <h1> Todas las Categorias</h1>
        </header>

        <div class="categorias-content">

                <ul>
                    <?PHP foreach($result as $categoria): ?>
                        <li>
                            <a
                                    href="index.php?page=productos"> <img src="img/categorias/<?PHP echo $categoria['imagenes_categorias']?>.<?PHP echo $categoria['formato_imagen']?>" alt="<?PHP echo $catergoria['nombre_categoria']?>"></a>
                        </li>
                        </li>
                    <?php endforeach;?>
                </ul>

        </div>
        </hr>

        <header>
            <h2>Productos</h2>
        </header>
        </br>
        </br>

    </section>

<?PHP include __DIR__.'/../view/include/footer.php';?>


