
<div class="container">
	<h3 class="text-center">Nuestros Productos</h3>
</div>
	<table class="table table-striped table-condensed">
			<tr>
				<th class="text-center">Categoria</th>
				<th class="text-center">Descripción</th>
			</tr>
			<?php foreach ($arrayCategories as $category):?>
			<tr class="text-center">
				<td><?= $category['name'] ?></td>
				<td><?= $category['description']?></td>
			</tr>
			<tr>
				<td colspan="2">
					<ul class="">		
					<?php $noDisponible=null; ?>
					<?php foreach ($arrayProducts as $products):?>
						<?php if ($category['id']==$products['product_category_id']): ?>
						<?php $noDisponible=1 ?>
							<li>
								<?=$products['name'];?> <a href="Detalles.php?idProduct=<?=$products['id']?>&idCategory=<?=$category['id']?>">Detalles</a>						
							</li>
						<?php endif ?>
					<?php endforeach ?>
						<?php if ($noDisponible==null): ?>
							<p>No disponible</p>
						<?php endif ?>
					</ul>
				</td>
			</tr>
			<?php endforeach ?>
	</table>