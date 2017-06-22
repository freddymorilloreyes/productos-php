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
					<?php foreach ($arreglo as $arrayCategory): ?>
				<tr>
					<td><?= $arrayCategory['name']; ?></td>
					<td><?= $arrayCategory['price']; ?></td>
					<td><?= $arrayCategory['active']; ?></td>
					<td><?= $arrayCategory['image']; ?></td>
					<td><?= $arrayCategory['product_category_id']; ?></td>
					<td><a class="btn btn-info btn-xs" href="EditarCategoryProduct.php?id=<?=$arrayCategory['id']?>">Editar</a></td>
					<td><a class="btn btn-danger btn-xs" href="EliminarCategoryProduct.php?id=<?=$arrayCategory['id']?>">Eliminar</a></td>
				</tr>
					<?php endforeach ?>
			<?php else: ?>
					<tr>
						<td colspan="4" class="text-center"> No hay Categorias</td>
					</tr>
			<?php endif ?>
		</table>
		<a class="btn btn-primary" href="../NewCategoryProduct.html">New Category</a>
	</div>
	
	<footer>
		
	</footer>
	<script src="js/jquery.js" ></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>