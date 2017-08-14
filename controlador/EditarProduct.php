<?php 
	require_once'constantesYRutas.php';
	//para que no puedan ingresar sin ser edministradores
	session_start();
	require_once crearStringRuta(array(VERIFICARINICIODESESSION));
	ValidarInicioDeSessionAdministrador($_SESSION); 

	include_once crearStringRuta(array(SALIRDECARP,CARPETAMODELO,CONFIG));

	$arregloCategory=getAllTabla(TABLAPRODUCTCATEGORY); //para cargar la lista de las categorias

//esto es para pintar la informacion en el form
	if (isset($_GET['id'])) {
		$arrayCampos=array_keys($_GET);//para usar las claves como valores de un nuevo array
		$product=getUnRegistro(TABLAPRODUCT,$arrayCampos,$_GET);
		include_once crearStringRuta(array(SALIRDECARP,CARPETAVISTA,EDITARPRODUCTVIEW));
	}
//esto es para actualizar
	if (count($_POST)>0) {
		$camposABuscar=array('id');
		$infoContenidaEnCamposABuscar=array(array_pop($_POST));
		$camposDelRegistro=array_keys($_POST);//para usar las claves como valores de un nuevo array
		$infoAInsertar=$_POST;
		updateRegistro(TABLAPRODUCT,$camposABuscar,$infoContenidaEnCamposABuscar,$camposDelRegistro,$infoAInsertar);
		crearHeader(array(MOSTRARPRODUCT));
	}

 ?>