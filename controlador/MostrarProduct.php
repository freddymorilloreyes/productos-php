<?php 
	require_once'../modelo/Config.php';
	$arregloCategory=getAllTabla('ProductCategory'); //para cargar la lista de las categorias
	$arreglo=getAllTabla('Product', 'ORDER BY name ASC');
	require_once'../vista/ListProduct.php';
 ?>