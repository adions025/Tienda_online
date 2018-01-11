
<section id="productos">
    <header>
        <h1> Todos los productos</h1>
    </header>
</br>
    <div class="productos-content">

        <?php
        $count=0;?>
        <?PHP foreach($result as $producto): ?>
                <ul>
                <li class="home-product-name"> <?php  echo $producto['nombre_producto']; ?></li>
                <br/>
                <li class="home-product" >
                    <a href="#" class="product" id="<?PHP echo $producto['Id_producto'];?>"> <img src="img/productos/<?PHP echo $producto['imagen_producto']?>.<?PHP echo $producto['formato_imagen']?>" alt="<?PHP echo $producto['nombre_producto']?>"></a>
                </li>
            <br/>
                <li class="precio-producto"> <?php  echo $producto['precio_producto']; echo '€' ?></li>
                </ul>



        <?php endforeach;?>
        <br/>

        <?php /*
        <?PHP foreach($result as $producto): ?>
            <li class="home-product" >
                <a href="#" class="product" id="<?PHP echo $producto['Id_producto'];?>"> <img src="img/productos/<?PHP echo $producto['imagen_producto']?>.<?PHP echo $producto['formato_imagen']?>" alt="<?PHP echo $producto['nombre_producto']?>"></a>
            </li>
        <?php endforeach;?>


        <?PHP foreach($result as $producto): ?>
            <li class="precio-producto"> <?php  echo $producto['precio_producto']; echo '€' ?></li>
        <?php endforeach;?>

       */?>
    </div>
    </br></br>
</section>