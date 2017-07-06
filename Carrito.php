
<div class="container text-right">
	<a class="btn btn-default" href="AccionUser.php">Volver a la lista</a>
</div>
<div class="container">
	<table class="table" >
		<tr>
			<th>Product</th>
			<th>Precio</th>
			<th>Cantidad</th>
			<th>Subtotal</th>
		</tr>
		<?php if (count($arrayPedidos)): ?>
			<?php $totalAPagar=0 ?>
			<?php foreach ($arrayPedidos as $pedido): ?>
				<tr>
					<?php foreach ($arrayProduct as $product): ?>
						<?php if ($pedido['product_id']==$product['id']): ?>
							<?php $totalProductCant= $product['price']*$pedido['cantidad']; ?>
							<td><?= $product['name'] ?></td>
							<td><?=number_format($product['price'])?> Bs</td>
							<td><?=$pedido['cantidad'];?></td>
							<td><?= number_format($totalProductCant)?> Bs</td>
							<td><a class="btn btn-danger" href="Eliminar.php?idPedido=<?=$pedido['id']?>">quitar</a></td>
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
					<td class="text-center" colspan="5"><h3>No tiene nada aún en su carrito</h3></td>
				</tr>
		<?php endif ?>
	
	</table>
</div>