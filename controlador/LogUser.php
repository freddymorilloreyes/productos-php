<?php 
if (isset($_POST['user']) && isset($_POST['password'])) {
	session_start();
	require_once'../modelo/MUser.php';
	$infoUser=getUser($_POST['user'], $_POST['password']);
	if (!empty($infoUser)) {
		$_SESSION['id']=$infoUser['id'];
		$_SESSION['firstName']=$infoUser['firstName'];
		$_SESSION['lastName']=$infoUser['lastName'];
		$_SESSION['email']=$infoUser['email'];
		$_SESSION['password']=$infoUser['password'];
		header('location:../PaginaInicio.php');
	}else{
		header('location:../ErrorAlIniciar.php');
	}

}
 ?>