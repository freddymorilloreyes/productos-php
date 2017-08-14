<?php 
	require_once'constantesYRutas.php';
if (isset($_POST['email']) && isset($_POST['password'])) {
		session_start();
		include_once crearStringRuta(array(SALIRDECARP,CARPETAMODELO,CONFIG));
		$arrayCampos=array_keys($_POST);//para usar las claves como valores de un nuevo array
		$infoUser=getUnRegistro(TABLAUSER,$arrayCampos,$_POST);
		if (!empty($infoUser)) {
			$_SESSION['id']=$infoUser['id'];
			$_SESSION['firstName']=$infoUser['firstName'];
			$_SESSION['lastName']=$infoUser['lastName'];
			$_SESSION['email']=$infoUser['email'];
			$_SESSION['password']=$infoUser['password'];
		crearHeader(array(ACCIONUSER));
		}else{
			crearHeader(array(SALIRDECARP,CARPETAVISTA,DATOSINCORRECTOSVIEW));	
		}

	}	

 ?>