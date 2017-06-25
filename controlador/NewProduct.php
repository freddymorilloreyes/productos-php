<?php 
	require_once'../modelo/MCategoryProduct.php';
	$arregloCategory=getCategoriesProduct();
	//var_dump($arregloCategory);
	include_once'../NewProduct.php';
	
if (isset($_POST['name']) && isset($_POST['price']) && isset($_POST['active'])&& isset($_POST['image'])&& isset($_POST['product_category_id'])) {
	require_once'../modelo/MProduct.php';
	setProduct($_POST['name'],$_POST['price'],$_POST['active'],$_POST['image'],$_POST['product_category_id']);
	header('location:ObtenerProduct.php');
}

 ?>