<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/estilos.css">
	<title>Detalles</title>
</head>
<body>
	<h1>
		<?= $detallesProduct['name'] ?>
	</h1>
	<h3>
		Categoria: <?=$categoryP['name'] ?>
	</h3>
<img src="../image/<?=$detallesProduct['image']?>" alt="">
<p>Precio: <?=$detallesProduct['price'] ?> bs</p>
<a href="AccionUser.php">volver</a>
<form action="Carrito.php" method="post">
	<label for="cantidad">Cantidad:</label>
	<input type="hidden" name="product_id" value="<?=$detallesProduct['id'];?>">
	<input type="number" placeholder="Cantidad" value="1" min="1" name="cantidad">
<input type="submit" value="Agregar al Carrito">
</form>
	<script src="../js/jquery.js" ></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>