<?php 
	session_start(); 
	if (count($_SESSION)>0){
		require_once'../modelo/Config.php';
		$arrayCategories=getAllTabla('ProductCategory');
		$arrayProducts=getAllTabla('Product');
		include_once'../vista/ProductosEnVenta.php';
	}else{
		echo "primero inicie sesion";
	}

 ?>
