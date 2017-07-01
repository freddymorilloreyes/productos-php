<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/estilos.css">
	<title>Products</title>
</head>
<body>
	<header class="container">
		<h1>Products</h1>
		<a href="ObtenerCategoryProduct.php">Categories</a>
		<a href="AccionUser.php">Inicio</a>
	</header>
	
	<div class="container">
		<table class="table table-striped table-condensed">
			<tr>
				<th class="text-center">Product</th>
				<th class="text-center">Price</th>
				<th class="text-center">Active</th>
				<th class="text-center">Image</th>
				<th class="text-center">Category</th>
				<th colspan="2" class="text-center">Acciones</th>
			</tr>
			<?php if(count($arreglo)>0 ): ?>
					<?php foreach ($arreglo as $product): ?>
				<tr>
					<td><?= $product['name']; ?></td>
					<td><?= $product['price']; ?></td>
					<td><?= $product['active']; ?></td>
					<td> <img  class="center-block img-rounded" width="80px" src="../image/<?=$product['image'];?>" alt="<?=$product['name'];?>"> </td>
					<td><?= $product['product_category_id']; ?></td>
					<td><a class="btn btn-info btn-xs" href="EditarProduct.php?id=<?=$product['id']?>">Editar</a></td>
					<td><a class="btn btn-danger btn-xs" href="EliminarProduct.php?id=<?=$product['id']?>">Eliminar</a></td>
				</tr>
					<?php endforeach ?>
			<?php else: ?>
					<tr>
						<td colspan="6" class="text-center"> <strong>No hay Productosx</strong></td>
					</tr>
			<?php endif ?>
		</table>
		<a class="btn btn-primary" href="NewProduct.php">New Product</a>
	</div>
	
	<footer>
		
	</footer>
	<script src="js/jquery.js" ></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>