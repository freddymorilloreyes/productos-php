<?php 
	//para que no puedan ingresar sin ser edministradores
	session_start();
	require_once'VerificarInicioDeSession.php';
	ValidarInicioDeSessionAdministrador($_SESSION); 

	require_once('../modelo/Config.php');

//esto es para pintar la informacion en el form
	if (isset($_GET['id'])) {
		$arrayCampos=array_keys($_GET);//para usar las claves como valores de un nuevo array
		$arrayCategory=getUnRegistro('ProductCategory',$arrayCampos,$_GET);
		include_once('../vista/EditarCategoryProduct.php');
	}
//esto es para actualizar
	if (isset($_POST['name']) && isset($_POST['description'])) {
		$camposABuscar=array('id');
		$infoContenidaEnCamposABuscar=array(array_pop($_POST));
		$camposDelRegistro=array_keys($_POST);//para usar las claves como valores de un nuevo array
		$infoAInsertar=$_POST;
		updateRegistro('ProductCategory',$camposABuscar,$infoContenidaEnCamposABuscar,$camposDelRegistro,$infoAInsertar);
		header('location:MostrarCategoryProduct.php');
	}
 ?>