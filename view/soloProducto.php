<section id="productos">

    <div class="solo-producto">

        <?PHP foreach($result as $producto): ?>
            <?php  echo $producto['nombre_producto']; ?>
        <?php endforeach;?>

        <br/>

    </div>
    <?PHP foreach($result as $producto): ?>
        <li>
            <a
                href="#"> <img src="img/productos/<?PHP echo $producto['imagen_producto']?>.<?PHP echo $producto['formato_imagen']?>" alt="<?PHP echo $producto['nombre_producto']?>"></a>
        </li>

    <?php endforeach;?>


</section>
