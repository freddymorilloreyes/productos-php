<header class="container">
		<h1>Categories</h1>
		<a href="ObtenerProduct.php">Products</a>
	</header>
	
	<div class="container">
		<table class="table table-striped table-condensed">
			<tr>
				<th class="text-center">Category</th>
				<th class="text-center">Description</th>
				<th colspan="3" class="text-center">Acciones</th>
			</tr>
			<?php if(count($arreglo)>0 ): ?>
					<?php foreach ($arreglo as $arrayCategory): ?>
				<tr>
					<td><?= $arrayCategory['name']; ?></td>
					<td><?= $arrayCategory['description']; ?></td>
					<td><a class="btn btn-info btn-xs" href="NewProduct.php?idSelected=<?=$arrayCategory['id']?>">Add</a></td>
					<td><a class="btn btn-info btn-xs" href="EditarCategoryProduct.php?idCategory=<?=$arrayCategory['id']?>">Edit</a></td>
					<td><a class="btn btn-danger btn-xs" href="Eliminar.php?idCategory=<?=$arrayCategory['id']?>">Delete</a></td>
				</tr>
					<?php endforeach ?>
			<?php else: ?>
					<tr>
						<td colspan="4" class="text-center"> No hay Categorias</td>
					</tr>
			<?php endif ?>
		</table>
		<a class="btn btn-primary" href="../controlador/NewCategoryProduct.php">New Category</a>
	</div>