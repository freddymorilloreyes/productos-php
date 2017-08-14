<?php 
	require_once'constantesYRutas.php';
	//para que no puedan ingresar sin ser edministradores
	session_start();
	require_once crearStringRuta(array(VERIFICARINICIODESESSION));
	ValidarInicioDeSessionAdministrador($_SESSION); 

	include_once crearStringRuta(array(SALIRDECARP,CARPETAMODELO,CONFIG));

//esto es para pintar la informacion en el form
	if (isset($_GET['id'])) {
		$arrayCampos=array_keys($_GET);//para usar las claves como valores de un nuevo array
		$arrayCategory=getUnRegistro(TABLAPRODUCTCATEGORY,$arrayCampos,$_GET);
		include_once crearStringRuta(array(SALIRDECARP,CARPETAVISTA,EDITARCATEGORYPRODUCTVIEW));
	}
//esto es para actualizar
	if (isset($_POST['name']) && isset($_POST['description'])) {
		$camposABuscar=array('id');
		$infoContenidaEnCamposABuscar=array(array_pop($_POST));
		$camposDelRegistro=array_keys($_POST);//para usar las claves como valores de un nuevo array
		$infoAInsertar=$_POST;
		updateRegistro(TABLAPRODUCTCATEGORY,$camposABuscar,$infoContenidaEnCamposABuscar,$camposDelRegistro,$infoAInsertar);
				crearHeader(array(MOSTRARCATEGORYPRODUCT));
	}
 ?>