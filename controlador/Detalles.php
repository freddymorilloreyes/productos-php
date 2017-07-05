<?php 
if (isset($_GET['idProduct']) && isset($_GET['idCategory'])) {
	session_start();
	require_once'../modelo/MProduct.php';
	$detallesProduct=getProduct($_GET['idProduct']);
	//var_dump($detallesProduct);
	require_once'../modelo/MCategoryProduct.php';
	$categoryP=getCategoryProduct($_GET['idCategory']);
	include_once'../Detalles.php';
}
 ?>