
<section id="soloProducto">
    <div class="solo-producto">
    </div>
    <?php
    $total=0; ?>
    <?PHP foreach($result as $producto): ?>
            <h1><?php  echo $producto['nombre_producto']; ?></h1>
            <li>
                <a
                    href="#"> <img src="img/productos/<?PHP echo $producto['imagen_producto']?>.<?PHP echo $producto['formato_imagen']?>" alt="<?PHP echo $producto['nombre_producto']?>"></a>
            </li>
            <?php  echo $producto['precio_producto']; echo '€' ?>
            </br>
            <?php  echo $producto['descripcion_producto']; echo '</br></br>'?>


    <?php endforeach;?>

            <button class="addTo" precio="<?PHP  echo $producto['precio_producto']?>" id-product="<?PHP  echo $producto['Id_producto']?>">Añadir al carro</button>

            <?php print_r($_SESSION['trolley']['precio']); ?>
            </br></br>
    </div>
</section>

