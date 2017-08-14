<?php 
	require_once'constantesYRutas.php';
	//para que no puedan ingresar sin ser administradores
	session_start();
	require_once crearStringRuta(array(VERIFICARINICIODESESSION));
	ValidarInicioDeSessionAdministrador($_SESSION); 

	include_once crearStringRuta(array(SALIRDECARP,CARPETAMODELO,CONFIG));
	$arreglo=getAllTabla(TABLAUSER, 'ORDER BY firstName ASC');
	include_once crearStringRuta(array(SALIRDECARP,CARPETAVISTA,LISTUSER)); 
	
 ?>