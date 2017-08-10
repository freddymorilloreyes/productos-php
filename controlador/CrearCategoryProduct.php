<?php 
	require_once'../modelo/Config.php';
	if (count($_POST)>0) {
			$arrayCampos=array_keys($_POST);//para usar las claves de post como valores de un nuevo array
			crearRegistro('ProductCategory',$arrayCampos,$_POST);
		header('location:MostrarCategoryProduct.php?accion=');
			var_dump($_POST);
	}
	require_once'../vista/NewCategoryProduct.php'; 

 ?>