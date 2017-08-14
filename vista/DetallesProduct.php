<?php 
include_once'CabeceraHTML.php';
include_once'BarraNavegacion.php';
 ?>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h1>
				<?= $detallesProduct['name'] ?>
			</h1>
			<h3>
				Categoría: <?=$categoryP['name'] ?>
			</h3>
			<img src="../image/<?=$detallesProduct['image']?>" alt="">
		</div>
		<div class="col-md-4">
			<h4>Precio: <?=$detallesProduct['price'] ?> bs</h4>
		
			<form class="form-vertical" action="agregarProductAlCarrito.php" method="post">
				<div class="form-group">
					<label for="cantidad">Cantidad:</label>
					<input type="number" placeholder="Cantidad" value="1" min="1" name="cantidad">
					<input type="hidden" name="product_id" value="<?=$detallesProduct['id'];?>">
				</div>
				<div class="form-group">
					<input type="submit" value="Agregar al Carrito">
				</div>
			</form>
		
		</div>
	</div>
</div>
<?php include_once'PieHTML.php'; ?>