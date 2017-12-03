    <!--<title>Categorias</title>   /* PREGUNTAR SI PONER title en cada pag-->
    <?php include __DIR__.'/include/menu.php'?>
    <script src="js/jqueryFunction.js"> </script>

    <section id="main-content-categorias">
        <header>
            <h1> Todas las Categorias</h1>
        </header>

        <div class="categorias-content">

                <ul class="categorias-ul">
                    <?PHP foreach($result as $index =>$categoria): ?>
                        <li class="categogias-li">
                            <a class="category-of-products" id="<?PHP echo $index+1 ?>"
                                    href="#"> <img src="img/categorias/<?PHP echo $categoria['imagenes_categorias']?>.<?PHP echo $categoria['formato_imagen']?>" alt="<?PHP echo $catergoria['nombre_categoria']?>"></a>
                        </li>
                        </li>
                    <?php endforeach;?>
                </ul>

        </div>
        </hr>

        <header>
            <h2>Productos</h2>
        </header>

        <div id="categorias-de-productos"></div>

        </br>
        </br>

    </section>

<?PHP include __DIR__.'/../view/include/footer.php';?>


