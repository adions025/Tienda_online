<?PHP include __DIR__.'/../view/include/menu.php';?>
<script src="js/function.js"> </script>
<body>
<!--#####################################################################-->
        <section id="main-content-registro">
            <header>
                <h1>Formulario de Registro</h1>
                <p>Por favor facilitanos todos tus datos</p>
            </header>

                    <div class="registro-content">
                        <form method="post" action="/~tdiw-j6/controller/crearUsuario.php"/>
                            Nombre: <input type="text" name="nombre"/> <br/>
                            Email: <input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/>
                            <br/><br />
                            <input type="submit" value="Registro"/>
                        </form>
                    </div>
        </section> <!-- / #main-content -->



</body>
</html>