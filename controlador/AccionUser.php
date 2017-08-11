<?php 
	session_start(); 
		require_once'../modelo/Config.php';
		require_once'ConstantesYRutas.php';
		echo TABLAPRODUCT;
		$arrayCategories=getAllTabla(TABLACATEGORYPRODUCT);
		$arrayProducts=getAllTabla(TABLAPRODUCT);
		include_once'../vista/ProductosEnVenta.php';
 ?>
