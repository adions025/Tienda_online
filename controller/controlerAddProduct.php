
<?PHP
include __DIR__.'/../model/ConnectDB.php';
include __DIR__.'/../model/obtenerCategorias.php';



$categorias = obtenerCategorias();



// Check if we've uploaded a file
if (!empty($_FILES['imagen_usuario']) && $_FILES['imagen_usuario']['error'] == UPLOAD_ERR_OK) {
    // Be sure we're dealing with an upload

    print_r($_FILES);
    if (is_uploaded_file($_FILES['imagen_usuario']['tmp_name']) === false) {
        //throw new \Exception('Error on upload: Invalid file definition');
    }

    // Rename the uploaded file
    $uploadName = $_FILES['imagen_usuario']['name'];

    echo($uploadName);
    $ext = strtolower(substr($uploadName, strripos($uploadName, '.')+1));
    $filename = round(microtime(true)).mt_rand().'.'.$ext;

    $path = '../img/productos/';

    move_uploaded_file($_FILES['imagen_usuario']['tmp_name'], $filename);
    echo($filename);
    echo("<br>");
    echo(__DIR__.$path.$filename);
    // Insert it into our tracking along with the original name
}


include __DIR__.'/../view/addProducto.php';

?>