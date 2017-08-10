<?php 
	include_once'CabeceraHTML.php';
	include_once'BarraNavegacion.php';
?>
<header class="container">
		<h1>Usuarios</h1>
		<a href="MostrarProduct.php">Productos</a> 
		<a href="MostrarCategoryProduct.php">Categorias</a> 
	</header>
	<div class="container">
		<table class="table table-striped table-condensed">
			<tr>
				<th class="text-center">firstName</th>
				<th class="text-center">lastName</th>
				<th class="text-center">email</th>
				<th class="text-center">Acciones</th>
			</tr>
			<?php if(count($arreglo)>0 ): ?>
					<?php foreach ($arreglo as $arrayUser): ?>
				<tr>
					<td><?= $arrayUser['firstName']; ?></td>
					<td><?= $arrayUser['lastName']; ?></td>
					<td><?= $arrayUser['email']; ?></td>
					<td><a class="btn btn-danger btn-xs" href="EliminarUser.php?id=<?=$arrayUser['id']?>">Eliminar</a></td>
				</tr>
					<?php endforeach ?>
			<?php endif ?>
		</table>
	</div>
<?php 	include_once'PieHTML.php';?>	