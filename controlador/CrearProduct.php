<?php
	//para que no puedan ingresar sin ser edministradores
	session_start();
	require_once'VerificarInicioDeSession.php';
	ValidarInicioDeSessionAdministrador($_SESSION); 
 
	require_once'../modelo/Config.php';
	$arregloCategory=getAllTabla('ProductCategory', 'ORDER BY name ASC'); //para cargar la lista de las categorias
	if (count($_POST)>0) {
			$arrayCampos=array_keys($_POST);//para usar las claves de post como valores de un nuevo array
			crearRegistro('Product',$arrayCampos,$_POST);
		header('location:MostrarProduct.php?accion=');
	}
		require_once'../vista/NewProduct.php';
 
 ?>