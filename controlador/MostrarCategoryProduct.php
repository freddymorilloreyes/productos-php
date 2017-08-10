<?php 
	//para que no puedan ingresar sin ser administradores
	session_start();
	require_once'VerificarInicioDeSession.php';
	ValidarInicioDeSessionAdministrador($_SESSION); 

		require_once'../modelo/Config.php';
		$arreglo=getAllTabla('ProductCategory', 'ORDER BY name ASC');
		require_once'../vista/ListCategoryProduct.php';

 ?>