<section id="productos">
    <div class="solo-producto">
    </div>
    <?PHP foreach($result as $producto): ?>
            <h2><?php  echo $producto['nombre_producto']; ?></h2>
            <li>
                <a
                    href="#"> <img src="img/productos/<?PHP echo $producto['imagen_producto']?>.<?PHP echo $producto['formato_imagen']?>" alt="<?PHP echo $producto['nombre_producto']?>"></a>
            </li>
            <?php  echo $producto['precio_producto']; ?>
            </br>
            <?php  echo $producto['descripcion_producto']; ?>
    <?php endforeach;?>
    </br>
    </div>
</section>
