<?php
include "./public/templates/Utils.php";
?>
<html lang="es">
<?php head("Sing in", "/public/views/auth/Login.css"); ?>
<body>
<div>
    <div class="container">
        <header class="text-center mx-auto">
            <h1>Teacher CRUD</h1>
            <hr/>
        </header>
        <div class="row">
            <div class="col-lg-6">

                <form action="#" method="post" class="col-lg-5">
                    <h3>Login</h3>
                    Username: <input type="text" name="username" class="form-control"/>
                    Password: <input type="password" name="password" class="form-control"/>
                    <br/>
                    <input type="submit" value="Login" class="btn btn-primary"/>
                    <input type="submit" value="Register" class="btn btn-success"/>
                </form>
            </div>
            <div class="col-lg-6 text-center">
                <hr/>
                <h3>Listado de servicios</h3>
                <a class="btn btn-secondary" href="/teacher/list"><i class="fa fa-align-justify"></i>Listar docentes</a>
                <hr/>
            </div>
        </div>
        <footer class="col-lg-12 text-center">
            Unipamplona - <?php echo date("Y"); ?>
        </footer>
    </div>
</div>
</body>



