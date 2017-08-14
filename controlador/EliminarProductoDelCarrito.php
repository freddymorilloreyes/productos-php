<?php 

	require_once'constantesYRutas.php';
	include_once crearStringRuta(array(SALIRDECARP,CARPETAMODELO,CONFIG));	$arrayCampos=array_keys($_GET);//para usar las claves como valores de un nuevo array
	deleteUnRegistro(TABLACARRITO,$arrayCampos,$_GET);
	crearHeader(array(CARRITOCONTROLADOR));

 ?>