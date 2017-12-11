
<!-- Adonis Gonzalez | Paul Paredes -->
<!-- 1423193         |  14xxxx      -->

    <?PHP include __DIR__. '/view/include/header.php';
    if (! isset($_GET['page']))  /*Operador Ternario*/
    {
        include __DIR__.'/controller/controlerHome.php';

    } else {
        $page = $_GET['page'];
        switch($page)
        {
            case 'home':
                  include __DIR__.'/controller/controlerHome.php';
                break;

            case 'categorias':
                include __DIR__.'/controller/controlerCategorias.php';
                break;

            case 'login':
                include __DIR__.'/controller/controlerLogin.php';
                break;

            case 'registro':
                include __DIR__.'/controller/controlerRegistro.php';
                break;

            case 'productos': /*solo view y no incluye header ni  footer*/
                include __DIR__.'/controller/controlerProductos.php';
                break;

            case 'soloproducto':
                include __DIR__.'/controller/controlerSoloProducto.php';
                /*include('controller/controlerSoloProducto.php');*/
                break;


        }

    }


