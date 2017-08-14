 <?php 
	include_once'CabeceraHTML.php';
	include_once'BarraNavegacion.php';
 ?>
 	<header class="container">
		<h1>Crear producto</h1>
	</header>
	
	<div class="container">
		<form class="form-horizontal" action="" method="post">
			<div class="form-group">
				<label class="sr-only" for="name">Nombre del Producto:</label>
				<input id=name type="text" class="form-control" name="name" placeholder="Nombre" required>
			</div>
			<div class="form-group">
				<label class="sr-only" for="price">Precio:</label>
				<input id="price" type="text" class="form-control" name="price" placeholder="Precio" required>
			</div>

			<div class="form-group">
				<label class="sr-only" for="active">Disponible:</label>			
				<select name="active" id="active">
					<option value="1">Si</option>
					<option value="0">No</option>
				</select>
			</div>

			<div class="form-group">
				<label class="sr-only" for="image">Imagen:</label>
				<input id="image" type="file" name="image" value="subir image" placeholder="url.image">
			</div>
			<div class="form-group">
				<label class="sr-only" for="product_category_id">Categoria:</label>			
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
				<button type="submit" class="btn btn-primary">Agregar</button>
			</div>
			<div class="form-group">
				<a href="MostrarProduct.php">Lista de Productos</a>
			</div>
		</form>
	</div>
	<form>
<?php 	include_once'PieHTML.php';?>