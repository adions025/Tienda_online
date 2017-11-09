/*
*@autor Adonis Gonzalez|Eduardo Paredes
*
*/
    <?PHP include __DIR__. '/view/include/header.php';
    if (! isset($_GET['page']))
    {
       include('view/main.php');

    } else {
        $page = $_GET['page'];
        switch($page)
        {
            case 'inicio':
                include('view/main.php');
                break;

            case 'productos':
                include('view/productos.php');
                break;

            case 'categorias':
                include('view/productos.php');
                break;

            case 'registro':
                include('view/registro.php');
                break;


        }

    }
    include("view/include/footer.php");
    ?>
