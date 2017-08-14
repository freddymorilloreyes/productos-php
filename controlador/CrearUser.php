<?php 
	require_once'constantesYRutas.php';
	include_once crearStringRuta(array(SALIRDECARP,CARPETAMODELO,CONFIG));
	
	include_once crearStringRuta(array(SALIRDECARP,CARPETAVISTA,NEWUSERVIEW));
	if (count($_POST)>0) {
		$arrayCampos=array_keys($_POST);//para usar las claves de post como valores de un nuevo array
		crearRegistro(TABLAUSER,$arrayCampos,$_POST);
		include_once crearStringRuta(array(LOGUSER));
	}
 ?>