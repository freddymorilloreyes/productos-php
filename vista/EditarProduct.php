<?php 
include_once'CabeceraHTML.php';
include_once'BarraNavegacion.php';
?>
	<header class="container">
		<h1>Actualizar Producto</h1>
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
					<option value="1" <?php if ($product['active']==1):?> selected <?php endif ?>>Si</option>
					<option value="0" <?php if ($product['active']==0):?> selected <?php endif ?>>No</option>
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
	 <?php include_once'PieHTML.php'; ?>