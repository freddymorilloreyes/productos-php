<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
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
<a href="">Agregar al carrito</a>

</body>
</html>