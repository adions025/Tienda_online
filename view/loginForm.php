
<?PHP
include __DIR__. '/../view/include/header.php';
include __DIR__.'/../view/include/menu.php';?>
<!--#####################################################################-->

<section id="main-content-registro">
    <header>
        <h1>Login</h1>
        <p>Ingresa con tu usuario y password</p>
    </header>

    <div class="registro-content">
        <form method="post" action="index.php?page=loginAction""/>
            Email: <input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/> <br/>
            Password: <input type="password" name="password"/> <br/>
            <label class="login">¿Admin?:</label><input type="checkbox" value="1" name="admin" /><br/>
            <input type="submit" value="Iniciar sesion"/>
        </form>
    </div>
</section> <!-- / #main-content -->

<?PHP include __DIR__.'/../view/include/footer.php'; ?>