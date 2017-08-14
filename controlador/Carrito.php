<?php 
	require_once'constantesYRutas.php';
	//para que no puedan ingresar sin estar logeados
	session_start();
	require_once crearStringRuta(array(VERIFICARINICIODESESSION));
	VerificarInicioDeSession($_SESSION); 

	include_once crearStringRuta(array(SALIRDECARP,CARPETAMODELO,CONFIG));

	$arrayArticulosEnElCarrito=getAllTabla(TABLACARRITO/* , 'ORDER BY name ASC'*/);
	$arrayProduct=getAllTabla(TABLAPRODUCT /* , 'ORDER BY name ASC'*/);
	include_once crearStringRuta(array(SALIRDECARP,CARPETAVISTA,CARRITOVIEW));
 ?>