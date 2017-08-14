<?php 
	require_once'constantesYRutas.php';
	//para que no puedan ingresar sin ser administradores
	session_start();
	require_once crearStringRuta(array(VERIFICARINICIODESESSION));
	ValidarInicioDeSessionAdministrador($_SESSION); 

	include_once crearStringRuta(array(SALIRDECARP,CARPETAMODELO,CONFIG));
	if (count($_POST)>0) {
			$arrayCampos=array_keys($_POST);//para usar las claves de post como valores de un nuevo array
			crearRegistro(TABLAPRODUCTCATEGORY,$arrayCampos,$_POST);
		crearHeader(array(MOSTRARCATEGORYPRODUCT));
	}
	include_once crearStringRuta(array(SALIRDECARP,CARPETAVISTA,NEWCATEGORYPRODUCTVIEW)); 

 ?>