<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/estilos.css">
	<title>Hi! <?=$_SESSION['firstName']?> </title>
</head>
<body>

<div class="container">
<table>
	<div class="panel-group" id="myaccordion">
		<tr>
		<td>
		<div class="panel panel-default">
			<a data-toggle="collapse" data-parent="#myaccordion" href="#a" >tr</a>
			<div id="a" class="panel-collapse collapse">
				<p>a</p>
			</div>
		</div>
		</td>	
		<td>fghj</td>
		</tr>
		<tr>
		<td>

			<div class="panel panel-default">
			<a data-toggle="collapse" data-parent="#myaccordion" href="#b" >tr</a>
			<div id="b" class="panel-collapse collapse">
				<p>b</p>
			</div>
		</div>
		</td>	
		</tr>
		<tr>
		<td>

			<div class="panel panel-default">
			<a data-toggle="collapse" data-parent="#myaccordion" href="#c" >tr</a>
			<div id="c" class="panel-collapse collapse">
				<p>c</p>
			</div>
		</div>
		</td>	
		</tr>
	</div>	
</table>
</div>
	
	<header class="container">
		<h1>
			Welcome <?= $_SESSION['firstName']." ". $_SESSION['lastName'] ?>
		</h1>
		<a href="Logout.php">Logout</a>
		<a href="EditarUser.php">Editar Usuario</a>
			
	</header>

		<div class="container">
		<a href="">hacer una compra</a>
		</div>

<p>nuestros products</p>

<div class="container">
	<table class="table table-striped table-condensed">
		<div class="panel-group" id="ourProduct">
			<tr>
				<th class="text-center">Category</th>
				<th class="text-center">Description</th>
			</tr>
			<?php $count=0 ?>
			<?php foreach ($arrayCategories as $category):?>
				<?php $count++ ?>
			<tr class="text-center">
				<td><a data-toggle="collapse" data-parent="#ourProduct" href="#<?=$count?>" ><?= $category['name'] ?></a></td>
				<td><?= $category['description']?></td>
			</tr>
			<tr>
				<div id="<?=$count?>" class="panel-collapse collapse">
					<td colspan="2">
						<ul class="">		
						<?php $noDisponible=null; ?>
						<?php foreach ($arrayProducts as $products):?>
							<?php if ($category['id']==$products['product_category_id']): ?>
							<?php $noDisponible=1 ?>
							<li>
								<?=$products['name'];?> <a href="">Detalles</a>   <a href="">Agregar al carrito</a> 
							</li>
							<?php endif ?>
						<?php endforeach ?>
							<?php if ($noDisponible==null): ?>
								<p>No disponible</p>
							<?php endif ?>
						</ul>
					</td>
				</div>	
			</tr>
			<?php endforeach ?>
		</div>
	</table>
</div>

	<script src="../js/jquery.js" ></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>