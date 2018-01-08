
<!-- Adonis Gonzalez | Paul Paredes -->
<!-- 1423193         |  1424434      -->
    <?PHP
    session_start();

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
                break;

            case 'carro':
                include __DIR__.'/controller/controllerCarro.php';
                break;

            case 'pagado':
                include __DIR__.'/controller/controlerPagar.php';
                break;

            case 'logout':
                include __DIR__.'/controller/controlerLogout.php';
                break;

            case 'administrar':
                include __DIR__.'/controller/controlerAdministrador.php';
                break;

            case 'loginAction':
                include __DIR__.'/controller/controllerLogin.php';
                break;

            case 'productosAll':
                include __DIR__.'/controller/controlerProductosAll.php.php';
                break;
        }

    }


