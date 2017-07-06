	<header class="container">
		<h1>Actualizar Categoria</h1>
	</header>
	
	<div class="container">
		<form class="form-horizontal" action="EditarCategoryProduct.php" method="post">
			<div class="form-group">
				<label class="sr-only" for="name">Categoria:</label>
				<input id=name type="text" class="form-control" name="name" placeholder="Name" required value="<?= $arrayCategory['name']?>">
			</div>
			<div class="form-group">
				<label class="sr-only" for="description">Description:</label>
				<textarea id="description" class="form-control" name="description" cols="30" rows="10" placeholder="Description" required><?= $arrayCategory['description']?></textarea>
				<input type="hidden" name="id" value="<?= $arrayCategory['id']?>">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Update</button>
			</div>
			<div class="form-group">
				<a href="ObtenerCategoryProduct.php">View List</a>
			</div>
		</form>
	</div>