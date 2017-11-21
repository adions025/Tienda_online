<body>
<?PHP include __DIR__.'/../view/include/menu.php';?>
<?/*PHP require '../model/ConnectDB.php'*/;?>
<script src="js/jqueryFunction.js"> </script>

<!--#####################################################################-->

<section id="main-content-registro">
    <header>
        <h1>Formulario de Registro</h1>
        <p>Por favor facilitanos todos tus datos</p>
    </header>

    <div class="registro-content">
        <form method="post" action="http://deic-dc0.uab.cat/~tdiw-j6/controller/crearUsuario.php">

            Nombre: <input type="text" name="nombre"/> <br/>
            Password: <input type="password" name="password"/> <br/>
            Email: <input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/> <br/>
            Dirección: <input type="text" name="address"/> <br/>
            Ciudad: <input type="text" name="ciudad" equired size="30 "/> <br/> <!--30 caracteres y espacio -->
            Código Postal *: <input type="text" name="cp" required size="5" pattern="[0-9]{5}" title="El codigo postal tiene 5 caracteres"/> <br/>
            <!--codigo postal obligatorio 5  cacteres-->
            <br/><br />
            <input type="submit" value="Registro">
        </form>
    </div>


</section> <!-- / #main-content -->



</body>
</html>