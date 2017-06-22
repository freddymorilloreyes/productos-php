<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/estilos.css">
	<title>Editar categoria</title>
</head>
<body>
	<header class="container">
		<h1>Actualizar Productos</h1>
	</header>
	
	<div class="container">
		<form class="form-horizontal" action="EditarCategoryProduct.php" method="post">
			<div class="form-group">
				<label class="sr-only" for="name">Categoria:</label>
				<input id=name type="text" class="form-control" name="name" placeholder="Name" required value="<?= $arrayCategory['name']?>">
			</div>
			<div class="form-group">
				<label class="sr-only" for="description">Description:</label>
				<textarea id="description" class="form-control" name="description" cols="30" rows="10" placeholder="Description" required><?= $arrayCategory['description']?></textarea>
				<input type="hidden" name="id" value="<?= $arrayCategory['id']?>">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Enviar</button>
			</div>
			<div class="form-group">
				<a href="ObtenerCategoryProduct.php">View List</a>
			</div>
		</form>
	</div>

	<footer>
		
	</footer>
	<script src="js/jquery.js" ></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>