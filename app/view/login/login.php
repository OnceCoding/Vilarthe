
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> Vilarthe | Iniciar Sesión</title>

	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/public/libraries/css/bootstrap.min.css">
	<link rel="stylesheet" href="/public/loginPublic/css/animateLogin.css">
	<link rel="stylesheet" href="/public/loginPublic/css/styleLogin.css">

</head>

<body>
	<div class="container-login">
		<div class="login-box animated fadeInUp">
            <form action="/login" method="post">
                <div class="box-header">
                    <h1 id="title" class="hidden"><img class="img-fluid" src="/public/loginPublic/images/logoFondoOscuro100.png"></h1>
                </div>
                <label for="username" class="mt">Usuario</label>
                <br/>
                <input type="text" id="username">
                <br/>
                <label for="password">Contraseña</label>
                <br/>
                <input type="password" id="password">
                <br/>
                <button type="submit">Ingresar</button>
                <br/>
            </form>
		</div>
	</div>

	<script src="/public/libraries/js/jquery-3.2.1.min.js"></script>
	<script src="/public/loginPublic/js/mainLogin.js"></script>
</body>

</html>