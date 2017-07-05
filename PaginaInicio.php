<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/estilos.css">
	<title>Hi! <?=$_SESSION['firstName']?> </title>
</head>
<body>
	<header class="container">
		<h1>
			Welcome <?= $_SESSION['firstName']." ". $_SESSION['lastName'] ?>
		</h1>
		<a href="Logout.php">Logout</a>
		<a href="EditarUser.php">Editar Usuario</a>
			
	</header>

		<div class="container">
		<a href="Carrito.php">Ver mi carrito</a>
		</div>

<p>nuestros products</p>

	<table class="table table-striped table-condensed">
			<tr>
				<th class="text-center">Category</th>
				<th class="text-center">Description</th>
			</tr>
			<?php foreach ($arrayCategories as $category):?>
			<tr class="text-center">
				<td><?= $category['name'] ?></td>
				<td><?= $category['description']?></td>
			</tr>
			<tr>
				<td colspan="2">
					<ul class="">		
					<?php $noDisponible=null; ?>
					<?php foreach ($arrayProducts as $products):?>
						<?php if ($category['id']==$products['product_category_id']): ?>
						<?php $noDisponible=1 ?>
							<li>
								<?=$products['name'];?> <a href="Detalles.php?idProduct=<?=$products['id']?>&idCategory=<?=$category['id']?>">Detalles</a>						
							</li>
						<?php endif ?>
					<?php endforeach ?>
						<?php if ($noDisponible==null): ?>
							<p>No disponible</p>
						<?php endif ?>
					</ul>
				</td>
			</tr>
			<?php endforeach ?>
	</table>

	<script src="../js/jquery.js" ></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>