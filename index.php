
<!--#####################################################################-->

    <?PHP include __DIR__. '/view/include/header.php';
    if (! isset($_GET['page']))
    {
        include('./home.php');

    } else {
        $page = $_GET['page'];
        switch($page)
        {
            case 'inicio':
                include('./index.php');
                echo ('prueba');
                break;
            case 'registro':
                include('/view/registro.php');
                break;
            case 'productos':
                include('productos.php');
                break;
        }

    }
    include("footer.php");
    ?>
    <!--#####################################################################-->

	<section id="main-content">

		<header>
			<div class="header-contenido">
				<div class="slide"> </div>
				<div class="baner1"> </div>
				<div class="baner2"> </div>
				<!--<img src="img/slide.png" alt="slide" height="400" width="1110" /> -->
                <!-- <img src="img/slide.png" alt="slide" /> -->
			</div>
		</header>

		<div class="content">
			<p>Conteniido pruebasaaaaaa.</p>
            <p>Usuarios base de datos:</p>

            <?php require'model/ConnectDB.php' ?>
            <br/>


        </div>

    </section>


    <?PHP include __DIR__. '/view/include/footer.php' ?>


</body>
</html>