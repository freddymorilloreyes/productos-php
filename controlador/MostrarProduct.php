<?php
	require_once'constantesYRutas.php';
	//para que no puedan ingresar sin ser administradores
	session_start();
	require_once crearStringRuta(array(VERIFICARINICIODESESSION));
	ValidarInicioDeSessionAdministrador($_SESSION); 

	include_once crearStringRuta(array(SALIRDECARP,CARPETAMODELO,CONFIG));
	$arregloCategory=getAllTabla(TABLAPRODUCTCATEGORY); //para cargar la lista de las categorias
	$arreglo=getAllTabla(TABLAPRODUCT, 'ORDER BY name ASC');
	include_once crearStringRuta(array(SALIRDECARP,CARPETAVISTA,LISTPRODUCT)); 

 ?>