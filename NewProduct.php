<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/estilos.css">
	<title>New product</title>
</head>
<body>
	<header class="container">
		<h1>Crear product</h1>
	</header>
	
	<div class="container">
		<form class="form-horizontal" action="NewProduct.php" method="post">
			<div class="form-group">
				<label class="sr-only" for="name">Name:</label>
				<input id=name type="text" class="form-control" name="name" placeholder="Name" required>
			</div>
			<div class="form-group">
				<label class="sr-only" for="price">Price:</label>
				<input id="price" type="text" class="form-control" name="price" placeholder="Price" required>
			</div>

			<div class="form-group">
				<label class="sr-only" for="active">Active:</label>			
				<select name="active" id="active">
					<option>1</option>
					<option>0</option>
				</select>
			</div>

			<div class="form-group">
				<label class="sr-only" for="image">Image:</label>
				<input id="image" type="file" name="image" value="subir image" placeholder="url.image">
			</div>
			<div class="form-group">
				<label class="sr-only" for="product_category_id">category:</label>			
				<select name="product_category_id" id="product_category_id">
					<?php foreach ($arregloCategory as $category):?>
						<option  
						<?php if (isset($_GET['idSelected'])):?>
							<?php if ($_GET['idSelected']==$category['id']): ?>
								selected 
							<?php endif ?>
						<?php endif ?>
						value="<?=$category['id'];?>"> <?= $category['name']; ?></option>
					<?php  endforeach ?>
				</select>
			</div>
				
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Enviar</button>
			</div>
			<div class="form-group">
				<a href="ObtenerProduct.php">View List Products</a>
			</div>
		</form>
	</div>
	<form>
	<footer>
		
	</footer>
	<script src="js/jquery.js" ></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>