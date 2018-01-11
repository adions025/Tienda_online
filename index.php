
<!-- Adonis Gonzalez | Paul Paredes -->
<!-- 1423193         |  1424434      -->
    <?PHP
    session_start();
    if (! isset($_GET['page']))
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

            case 'login':  //only show the form login not the action
                include __DIR__.'/controller/controlerLogin.php';
                break;

            case 'loginAction': //action to login the users (admin = 2 and user =1)
                include __DIR__.'/controller/controllerLogin.php';
                break;

            case 'registro': //only show the form register not the action
                include __DIR__.'/controller/controlerRegistro.php';
                break;

            case 'productos': //only view
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

            case 'productosAll':
                include __DIR__.'/controller/controlerProductosAll.php.php';
                break;

            case 'adminPedidos':
                include __DIR__.'/controller/controlerAdminPedidos.php';
                break;

            case 'adminProductos':
                include __DIR__.'/controller/controlerAdminShowProductos.php';
                break;

            case 'adminAdd':
                include __DIR__.'/controller/controlerAdminAddProducto.php';
                break;

            case 'adminViewAdd':
                include __DIR__.'/controller/controlerAdminViewAddproducto.php';
                break;

            case 'calcularTotal':
                include __DIR__.'/controller/controlerCalcularTotal.php';
                break;
        }

    }


