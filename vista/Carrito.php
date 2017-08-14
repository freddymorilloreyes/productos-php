  <?php 
include_once'CabeceraHTML.php';
include_once'BarraNavegacion.php';
 ?>
<div class="container text-center">
	<a class="btn btn-default " href="AccionUser.php">Ver Productos</a>
</div>
<div class="container">
	<table class="table" >
		<tr>
			<th>Producto</th>
			<th>Precio</th>
			<th>Cantidad</th>
			<th>Subtotal</th>
			<th></th>
		</tr>
		<?php if (count($arrayArticulosEnElCarrito)): ?>
			<?php $totalAPagar=0 ?>
			<?php foreach ($arrayArticulosEnElCarrito as $articulosEnElCarrito): ?>
				<tr>
					<?php foreach ($arrayProduct as $product): ?>
						<?php if ($articulosEnElCarrito['product_id']==$product['id']): ?>
							<?php $totalProductCant= $product['price']*$articulosEnElCarrito['cantidad']; ?>
							<td><?= $product['name'] ?></td>
							<td><?=number_format($product['price'])?> Bs</td>
							<td><?=$articulosEnElCarrito['cantidad'];?></td>
							<td><?= number_format($totalProductCant)?> Bs</td>
							<td><a class="btn btn-danger" href="EliminarProductoDelCarrito.php?id=<?=$articulosEnElCarrito['id']?>">quitar</a></td>
							<?php $totalAPagar=$totalProductCant+$totalAPagar ?>
						<?php endif ?>
					<?php endforeach ?>
				</tr>
			<?php endforeach ?>
				<tr>
					<td colspan="4">Total</td>
					<td><?=number_format($totalAPagar)?> Bs</td>
				</tr>
		<?php else: ?>
				<tr>	
					<td class="text-center" colspan="5"><h3>No hay productos en el carrito</h3></td>
				</tr>
		<?php endif ?>
	
	</table>
</div>
<?php include_once'PieHTML.php'; ?>