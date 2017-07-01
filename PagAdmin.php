<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Adimin</title>
</head>
<body>
	<header class="container">
		<h1>
			Welcome <?= $_SESSION['firstName']." ". $_SESSION['lastName'] ?>
		</h1>
		<a href="Logout.php">Logout</a>
		<a href="EditarUser.php">Editar Usuario</a>
		<p>Usted ha iniciado sesion como administrador desde esta pagina puede cambiar datos sobre nuestros productos  </p>
		<a href="ObtenerProduct.php">Administrar Products</a>
		<a href="ObtenerCategoryProduct.php">Administrar Categories</a>
		<a href="AccionUser.php?entrar=entrar">Ver productos</a>			
	</header>
</body>
</html>