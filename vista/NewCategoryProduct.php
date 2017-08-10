<?php 
	include_once'CabeceraHTML.php';
	include_once'BarraNavegacion.php';
 ?>
	<header class="container">
		<h1>Crear Categoria</h1>
	</header>
	<div class="container">
		<form class="form-horizontal" action="" method="post">
			<div class="form-group">
				<label class="sr-only" for="name">Categoria:</label>
				<input id=name type="text" class="form-control" name="name" placeholder="Name" required>
			</div>
			<div class="form-group">
				<label class="sr-only" for="description">Descripción:</label>
				<textarea id="description" class="form-control" name="description" cols="30" rows="10" placeholder="Description" required></textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Crear Categoria</button>
			</div>
			<div class="form-group">
				<a href="MostrarCategoryProduct.php">Ver Categorias</a>
			</div>
		</form>
	</div>
<?php 	include_once'PieHTML.php';?>