<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/estilos.css">
	<title>Mi Carrito</title>
</head>
<body>
<header>
	<h1>Mi Carrito</h1>
</header>
<a href="AccionUser.php">Volver a la lista</a>
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
							<td><a class="btn btn-danger" href="EliminarPedido.php?id=<?=$pedido['id']?>">quitar</a></td>
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
					<td colspan="5">No tiene nada aun en su carrito</td>
				</tr>
		<?php endif ?>
	
	</table>
</div>
	<script src="../js/jquery.js" ></script>
	<script src="../js/bootstrap.min.js"></script>

</body>
</html>