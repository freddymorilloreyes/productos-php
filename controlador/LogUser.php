<?php 
 var_dump($_POST);
if (isset($_POST['email']) && isset($_POST['password'])) {
	session_start();
	require_once'../modelo/Config.php';
	$arrayCampos=array_keys($_POST);//para usar las claves como valores de un nuevo array
	$infoUser=getUnRegistro('User',$arrayCampos,$_POST);
	if (!empty($infoUser)) {
		$_SESSION['id']=$infoUser['id'];
		$_SESSION['firstName']=$infoUser['firstName'];
		$_SESSION['lastName']=$infoUser['lastName'];
		$_SESSION['email']=$infoUser['email'];
		$_SESSION['password']=$infoUser['password'];
		header('location:AccionUser.php');
	}else{
		
		header('location:../vista/DatosIncorrectos.php');	
	}

}

 ?>