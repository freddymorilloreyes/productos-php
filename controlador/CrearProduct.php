<?php
	require_once'constantesYRutas.php';
	//para que no puedan ingresar sin ser edministradores
	session_start();
	require_once crearStringRuta(array(VERIFICARINICIODESESSION));
	ValidarInicioDeSessionAdministrador($_SESSION); 
 
	include_once crearStringRuta(array(SALIRDECARP,CARPETAMODELO,CONFIG));
	$arregloCategory=getAllTabla(TABLAPRODUCTCATEGORY, 'ORDER BY name ASC');//para cargar la lista de las categorias
	include_once crearStringRuta(array(SALIRDECARP,CARPETAVISTA,NEWPRODUCTVIEW));
	if (count($_POST)>0) {
			$arrayCampos=array_keys($_POST);//para usar las claves de post como valores de un nuevo array
			crearRegistro(TABLAPRODUCT,$arrayCampos,$_POST);
		crearHeader(array(MOSTRARPRODUCT));
	}
 
 ?>