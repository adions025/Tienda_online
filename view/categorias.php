    <!--<title>Categorias</title>   /* PREGUNTAR SI PONER title en cada pag-->
    <?php include __DIR__.'/include/menu.php'?>

    <section id="main-content-categorias">
        <header>
            <h1> Todas las Categorias</h1>
        </header>

        <div class="categorias-content">
            <?PHP
            foreach($result as $categoria):
                /*
                echo $categoria['Id_categoria'];
                echo $categoria['nombre_categoria'];
                */

               /* echo $categoria['descripciom_categorias'];*/
                ?>
                <img src="img/categorias/<?PHP echo $categoria['imagenes_categorias']?>.<?PHP echo $categoria['formato_imagen']?>" alt="<?PHP echo $catergoria['nombre_categoria']?>">
                <?php
                echo("<br/>");
                endforeach;


            ?>
            <br/>
        </div>

    </section>


