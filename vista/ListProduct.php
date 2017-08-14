 <?php 
	include_once'CabeceraHTML.php';
	include_once'BarraNavegacion.php';
?>
 	<header class="container">
		<h1>Productos</h1>
	</header>
	<div class="container">
		<table class="table table-striped table-condensed">
			<tr>
				<th class="text-center">Producto</th>
				<th class="text-center">Precio</th>
				<th class="text-center">Activo</th>
				<th class="text-center">Imagen</th>
				<th class="text-center">Categoría</th>
				<th colspan="2" class="text-center">Acciones</th>
			</tr>
			<?php if(count($arreglo)>0): ?>
					<?php foreach ($arreglo as $product): ?>
				<tr>
					<td><?= $product['name']; ?></td>
					<td><?= $product['price']; ?></td>
					<td>
						<?php if ($product['active']==1): ?> si <?php else: ?> no <?php endif ?>
					</td>
					<td> <img  class="center-block img-rounded" width="80px" src="../image/<?=$product['image'];?>" alt="<?=$product['name'];?>"> </td>
					
					<td>
						<?php foreach ($arregloCategory as $category): ?>
							<?php if ($category['id']==$product['product_category_id']): ?>
								<?=$category['name'] ?>
							<?php endif ?>							
						<?php endforeach ?>
					</td>
					
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
		<a class="btn btn-primary" href="CrearProduct.php">Agregar Producto</a>
	</div>
<?php 	include_once'PieHTML.php';?>	