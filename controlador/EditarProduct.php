<?php 
	//para que no puedan ingresar sin ser edministradores
	session_start();
	require_once'VerificarInicioDeSession.php';
	ValidarInicioDeSessionAdministrador($_SESSION); 

	require_once('../modelo/Config.php');
	$arregloCategory=getAllTabla('ProductCategory'); //para cargar la lista de las categorias

//esto es para pintar la informacion en el form
	if (isset($_GET['id'])) {
		$arrayCampos=array_keys($_GET);//para usar las claves como valores de un nuevo array
		$product=getUnRegistro('Product',$arrayCampos,$_GET);
		include_once('../vista/EditarProduct.php');
	}
//esto es para actualizar
	if (count($_POST)>0) {
		$camposABuscar=array('id');
		$infoContenidaEnCamposABuscar=array(array_pop($_POST));
		$camposDelRegistro=array_keys($_POST);//para usar las claves como valores de un nuevo array
		$infoAInsertar=$_POST;
		updateRegistro('Product',$camposABuscar,$infoContenidaEnCamposABuscar,$camposDelRegistro,$infoAInsertar);
		header('location:MostrarProduct.php');
	}

 ?>