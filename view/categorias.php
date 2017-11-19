        <!--<title>Categorias</title>   /* PREGUNTAR SI PONER title en cada pag-->
        <?php include __DIR__.'/include/menu.php'?>

    <section id="main-content-categorias">

        <p>prueba</p>

        <div class="content">

            <?PHP
            foreach($result as $categoria):
                echo $categoria['Id_categoria'];
                echo $categoria['nombre_categoria'];

                echo $categoria['descripciom_categorias'];
                ?>
                <img src="img/<?PHP echo $categoria['imagenes_categorias']?>.<?PHP echo $categoria['formato_imagen']?>">
                <?php
                echo("<br/>");
                endforeach;

            ?>


            <br/>

        </div>

    </section>


