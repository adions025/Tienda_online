


    <?PHP include __DIR__. '/view/include/header.php'  ?>

    <?PHP
 /*
    $pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'inicio';
 */
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
			<p>Conteniido pruebas Conteniido pruebas Conteniido pruebas Conteniido pruebas Conteniido pruebas Conteniido pruebas Conteniido pruebas Conteniido pruebas.</p>

            <p>Usuarios base de datos:</p>
            <?php require'model/ConnectDB.php' ?>
            <br/>


        </div>

    </section>


    <?PHP include __DIR__. '/view/include/footer.php' ?>


</body>
</html>