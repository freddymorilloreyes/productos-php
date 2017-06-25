<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/estilos.css">
	<title>Edit product</title>
</head>
<body>
	<header class="container">
		<h1>Edit product</h1>
	</header>
	
	<div class="container">
		<form class="form-horizontal" action="EditarProduct.php" method="post">
			<div class="form-group">
				<label class="sr-only" for="name">Name:</label>
				<input id=name type="text" class="form-control" name="name" placeholder="Name" required value="<?=$product['name'];?>">
			</div>
			<div class="form-group">
				<label class="sr-only" for="price">Price:</label>
				<input id="price" type="text" class="form-control" name="price" placeholder="Price" required value="<?= $product['price'];?>">
			</div>

			<div class="form-group">
				<label class="sr-only" for="active">Active:</label>			
				<select name="active" id="active">
					<option <?php if ($product['active']==1):?> selected <?php endif ?>>1</option>
					<option <?php if ($product['active']==0):?> selected <?php endif ?>>0</option>
				</select>
			</div>

			<div class="form-group">
				<label class="sr-only" for="image">Image:</label>
				<input id="image" type="file" name="image" required>
			</div>
			<div class="form-group">
				<label class="sr-only" for="product_category_id">category:</label>			
				<select name="product_category_id" id="product_category_id">
					<?php foreach ($arregloCategory as $category):?>
					<option <?php if($category['id'] == $product['product_category_id']):?> selected <?php endif?> value="<?=$category['id'];?>">

						<?= $category['name']; ?>

					</option>
					<?php  endforeach ?>
					
				</select>
			</div>
				<input type="hidden" name="id" value="<?= $product['id'];?>">
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Enviar</button>
			</div>
			<div class="form-group">
				<a href="">View List Categories</a>
			</div>
		</form>
	</div>

	<footer>
		
	</footer>
	<script src="js/jquery.js" ></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>