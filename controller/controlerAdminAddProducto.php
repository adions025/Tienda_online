<?PHP
include __DIR__.'/../model/ConnectDB.php';
include __DIR__.'/../model/obtenerProductos.php';

$uploaddir = '/moixero-home/tdiw/tdiw-j6/public_html/img/productos/';
if (!empty($_FILES['imagen_usuario']) && $_FILES['imagen_usuario']['error'] == UPLOAD_ERR_OK) {
    $ext = explode('.',$_FILES['imagen_usuario']['name']);
    $ext = end($ext);
    $filename = round(microtime(true)).mt_rand();
    move_uploaded_file($_FILES['imagen_usuario']['tmp_name'], $uploaddir.$filename.'.'.$ext);
    insertarProducto($filename, $ext);
}

$url = '../index.php?page=adminProductos';
header("Location: $url"); //Page redirecting to list of products  (view)
?>

