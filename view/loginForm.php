<body>
<?PHP include __DIR__.'/../view/include/menu.php';?>
<?/*PHP require '../model/ConnectDB.php'*/;?>
<script src="js/jqueryFunction.js"> </script>

<!--#####################################################################-->

<section id="main-content-registro">
    <header>
        <h1>Login</h1>
        <p>Ingresa con tu usuario y password</p>
    </header>

    <div class="registro-content">
        <form method="post" action="/~tdiw-j6/controller/controllerLogin.php""/>
        Email: <input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/> <br/>
        Password: <input type="password" name="password"/> <br/>
        <br/><br />
        <input type="submit" value="Iniciar sesion"/>
        </form>
    </div>


</section> <!-- / #main-content -->

<?PHP include __DIR__.'/../view/include/footer.php'; ?>