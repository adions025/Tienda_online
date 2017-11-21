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
            <?PHP foreach($result as $producto): ?>
                <li >
                    <a
                            href="#" class="product" id="<?PHP echo $producto['Id_producto'];?>"> <img src="img/productos/<?PHP echo $producto['imagen_producto']?>.<?PHP echo $producto['formato_imagen']?>" alt="<?PHP echo $producto['nombre_producto']?>"></a>
                </li>

            <?php endforeach;?>


    </section>
