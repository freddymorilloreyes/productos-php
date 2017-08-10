<?php 
	//para que no puedan ingresar sin estar logeados
	session_start();
	require_once'VerificarInicioDeSession.php';
	VerificarInicioDeSession($_SESSION); 

	require_once('../modelo/Config.php');
if (count($_SESSION)>0) {
	include_once'../vista/EditarUser.php';
}
if (count($_POST)>0) {
	//aqui se va a modificar la informacion del usuario
		$camposABuscar=array('id');
		$infoContenidaEnCamposABuscar=array($_SESSION['id']);
		$camposDelRegistro=array_keys($_POST);//para usar las claves como valores de un nuevo array
		$infoAInsertar=$_POST;
		updateRegistro('User',$camposABuscar,$infoContenidaEnCamposABuscar,$camposDelRegistro,$infoAInsertar);
	//se cierra la session para iniciarnuevamente con la informacion actualizada
		session_destroy();
		$infoUser=getUnRegistro('User',$camposDelRegistro,$_POST);
	//se inicia la sesion nuevamente
		session_start();
		$_SESSION['id']=$infoUser['id'];
		$_SESSION['firstName']=$infoUser['firstName'];
		$_SESSION['lastName']=$infoUser['lastName'];
		$_SESSION['email']=$infoUser['email'];
		$_SESSION['password']=$infoUser['password'];
	header('location:AccionUser.php');
}
 ?>