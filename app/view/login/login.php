<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Iniciar Sesión</title>

    <link rel="shortcut icon" type="image/png" href="/public/vilarthePublic/images/vilarthe_icono.png"/>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/public/libraries/css/bootstrap.min.css">
	<link rel="stylesheet" href="/public/loginPublic/css/styleLogin.css">

</head>

<body>
	<div class="container-login">
		<div class="login-box ">
            <form action="/login/validate" method="post">
                <div class="box-header">
                    <img class="img-fluid py-4" src="/public/loginPublic/images/logoFondoOscuro100.png">
                </div>
                <div class="form-group">
                    <label for="username" class="">Usuario</label>
                    <div class="d-flex justify-content-center">
                        <input class="form-control" type="text" id="username" name="username">
                    </div>
                </div>
                <div class="form-group">
                    <label for="pass" class="">Contraseña</label>
                    <div class="d-flex justify-content-center">
                        <input class="form-control" type="password" id="pass" name="pass">
                    </div>
                </div>
                <div>
                    <?php

                        session_start();

                        if(isset($_SESSION['user'])):
                            if($_SESSION['user'] == 'false'): ?>
                                <span class="error">Acceso denegado</span>
                    <?php   endif;
                        endif;
                    ?>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
		</div>
	</div>

	<script src="/public/libraries/js/jquery-3.2.1.min.js"></script>
	<script src="/public/loginPublic/js/mainLogin.js"></script>
</body>

</html>