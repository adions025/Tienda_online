
<!-- Adonis Gonzalez | Paul Paredes -->
<!-- 1423193         |  14xxxx      -->

    <?PHP include __DIR__. '/view/include/header.php';
    if (! isset($_GET['page']))
    {
       /*include('view/home.php');*/
        include __DIR__.'/controller/controlerHome.php';

    } else {
        $page = $_GET['page'];
        switch($page)
        {
            case 'home':
                include('controller/controlerHome.php');
                break;

            case 'productos':
                include('controller/controlerProductos.php');
                break;

            case 'categorias':
                include('controller/controlerCategorias.php');
                break;

            case 'registro':
                include('controller/controlerRegistro.php');
                break;

        }

    }
    include("view/include/footer.php");

