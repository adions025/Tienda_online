
    <?PHP include __DIR__. '/view/include/header.php';
    if (! isset($_GET['page']))
    {
       include('view/home.php');

    } else {
        $page = $_GET['page'];
        switch($page)
        {
            case 'home':
                include('view/home.php');
                break;

            case 'productos':
                include('view/productos.php');
                break;

            case 'categorias':
                include('view/categorias.php');
                break;

            case 'registro':
                include('view/registro.php');
                break;


        }

    }
    include("view/include/footer.php");
    ?>

