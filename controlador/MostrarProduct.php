<?php 
	//para que no puedan ingresar sin ser administradores
	session_start();
	require_once'VerificarInicioDeSession.php';
	ValidarInicioDeSessionAdministrador($_SESSION); 

	require_once'../modelo/Config.php';
	$arregloCategory=getAllTabla('ProductCategory'); //para cargar la lista de las categorias
	$arreglo=getAllTabla('Product', 'ORDER BY name ASC');
	require_once'../vista/ListProduct.php';
 ?>