<?php 
	session_start(); 
		require_once'constantesYRutas.php';
		include_once crearStringRuta(array(SALIRDECARP,CARPETAMODELO,CONFIG));
		$arrayCategories=getAllTabla(TABLAPRODUCTCATEGORY);
		$arrayProducts=getAllTabla(TABLAPRODUCT);
		include_once crearStringRuta(array(SALIRDECARP,CARPETAVISTA,PRODUCTENVENTA));

 ?>
