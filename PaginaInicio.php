<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome</title>
</head>
<body>
	<header class="container">
		<h1>
			Hola <?= $_SESSION['firstName']." ". $_SESSION['lastName'] ?>
		</h1>
		<a href="controlador/Logout.php">Logout</a>
		<a href="">Editar Usuario</a>
	</header>
</body>
</html>