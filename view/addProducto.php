<?PHP
include __DIR__. '/../view/include/header.php';
include __DIR__.'/../view/include/menu.php';
?>

<section id="main-content">


    <div class="registro-producto">


        <form enctype="multipart/form-data" action="/~tdiw-j6/controller/controlerAddProduct.php" method="POST">
            Nombre: <input type="text" name="nombre_producto"/> <br/>
            Descripción: <input type="text" name="descripcion_producto"/> <br/>
            Descripción Corta: <input type="text" name="descripcion_corta_producto"/> <br/>
            Precio: <input type="text" name="precio_producto"/> <br/>
            Categoria: <select> <?php foreach ($categorias as $categoria){
                echo ('<option value="'.$categoria['Id_categoria'].'">'.$categoria['nombre_categoria'].'</option>');
                } ?>
            </select>
            <br/>

            <!-- El nombre del elemento de entrada determina el nombre en el array $_FILES -->
            Enviar este fichero: <input name="imagen_usuario" type="file" /><br/>
            <input type="submit" value="Añadir producto" />
        </form>
    </div>

</section>

<?PHP include __DIR__.'/../view/include/footer.php'; ?>


