        <section id="productos">
        <header>
            <h1> Todos los productos</h1>
        </header>

            <div class="productos-content">

                <?PHP foreach($result as $producto): ?>
                            <?php  echo $producto['nombre_producto']; ?>


                <?php endforeach;?>

                <br/>

            </div>
    </section>
