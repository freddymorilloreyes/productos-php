<header class="container">
		<h1>Categorias</h1>
		<a href="MostrarLista.php?accion=listProduct">Productos</a>
		<a href="MostrarLista.php?accion=listUsers">Usuarios</a>

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
					<td><a class="btn btn-info btn-xs" href="NewProduct.php?idSelected=<?=$arrayCategory['id']?>">Agregar un Producto</a></td>
					<td><a class="btn btn-info btn-xs" href="Editar.php?id=<?=$arrayCategory['id']?>&accion=editCategory">Editar</a></td>
					<td><a class="btn btn-danger btn-xs" href="Eliminar.php?id=<?=$arrayCategory['id']?>&accion=deleteCategory">Borrar</a></td>
				</tr>
					<?php endforeach ?>
			<?php else: ?>
					<tr>
						<td colspan="4" class="text-center"> No hay Categorias</td>
					</tr>
			<?php endif ?>
		</table>
		<a class="btn btn-primary" href="Crear.php?accion=newCategory">Categoria nueva</a>
	</div>