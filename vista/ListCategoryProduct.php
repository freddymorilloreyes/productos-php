<?php 
	include_once'CabeceraHTML.php';
	include_once'BarraNavegacion.php';
?>
 <header class="container">
		<h1>Categorías</h1>
</header>
	
	<div class="container">
		<table class="table table-striped table-condensed">
			<tr>
				<th class="text-center">Categoria</th>
				<th class="text-center">Descripción</th>
				<th colspan="3" class="text-center">Acciones</th>
			</tr>
			<?php if(count($arreglo)>0 ): ?>
					<?php foreach ($arreglo as $arrayCategory): ?>
				<tr>
					<td><?= $arrayCategory['name']; ?></td>
					<td><?= $arrayCategory['description']; ?></td>
					<td><a class="btn btn-info btn-xs" href="CrearProduct.php?idSelected=<?=$arrayCategory['id']?>">Agregar un Producto</a></td>
					<td><a class="btn btn-info btn-xs" href="EditarCategoryProduct.php?id=<?=$arrayCategory['id']?>">Editar</a></td>
					<td><a class="btn btn-danger btn-xs" href="EliminarCategoryProduct.php?id=<?=$arrayCategory['id']?>">Borrar</a></td>
				</tr>
					<?php endforeach ?>
			<?php else: ?>
					<tr>
						<td colspan="4" class="text-center"> No hay Categorías</td>
					</tr>
			<?php endif ?>
		</table>
		<a class="btn btn-primary" href="CrearCategoryProduct.php">Categoría nueva</a>
	</div>
<?php 	include_once'PieHTML.php';?>	