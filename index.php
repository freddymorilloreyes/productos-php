<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	<title>Iniciar Sesion</title>
</head>
<body>
	<header class="container">
		<h1>Iniciar sesión</h1>
	</header>
<div class="container">
	<form action="controlador/LogUser.php" method="post" class="form-horizontal">
		<div class="form-group">
			<label class="sr-only" for="user">User:</label>
			<input id=user type="text" class="form-control" name="user" placeholder="User" required>
		</div>
		<div class="form-group">
			<label class="sr-only" for="password">Password:</label>
			<input id="password" class="form-control" name="password" type="password" placeholder="Password" required>
		</div>
		<div class="form-group">
			<button class="btn btn-primary">iniciar</button>
		</div>
	</form>
	<a href="NewUser.html">Registrate</a>
</div>	
	
	
	

	<footer>
		
	</footer>
	<script src="js/jquery.js" ></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>