<?php 
//esto es para pintar la informacion en el form
if (isset($_GET['id'])) {
	require_once'../modelo/MCategoryProduct.php';
	$arregloCategory=getCategoriesProduct();
	require_once'../modelo/MProduct.php';
	$product=getProduct($_GET['id']);
	include_once'../CabeceraHTML.php';
	include_once'../BarraNavegacion.php';
	include_once'../EditarProduct.php';
	include_once'../PieHTML.php';
}

//esto es para actualizar 
if (isset($_POST['id'])&&isset($_POST['name'])&&isset($_POST['price'])&&isset($_POST['active'])&&isset($_POST['image'])&&isset($_POST['product_category_id'])){
	require_once'../modelo/MProduct.php';
	updateProduct($_POST['id'],$_POST['name'],$_POST['price'],$_POST['active'],$_POST['image'],$_POST['product_category_id']);
	header("location:ObtenerProduct.php");
}


 ?>