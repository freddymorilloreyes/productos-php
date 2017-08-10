<?php 
		require_once'../modelo/Config.php';
		$arreglo=getAllTabla('ProductCategory', 'ORDER BY name ASC');
		require_once'../vista/ListCategoryProduct.php';

 ?>