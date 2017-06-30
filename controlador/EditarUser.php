<?php 
session_start();
if (count($_SESSION)>0) {
	include_once'../EditarUser.php';
}
if (count($_POST)>0) {
	session_destroy();
	require_once'../modelo/MUser.php';
	updateUser($_POST['id'], $_POST['firstName'],$_POST['lastName'],$_POST['email'],$_POST['password']);
	$infoUser=getUser($_POST['email'], $_POST['password']);
	var_dump($infoUser);
		session_start();
		$_SESSION['id']=$infoUser['id'];
		$_SESSION['firstName']=$infoUser['firstName'];
		$_SESSION['lastName']=$infoUser['lastName'];
		$_SESSION['email']=$infoUser['email'];
		$_SESSION['password']=$infoUser['password'];
	header('location:AccionUser.php');
}


 ?>