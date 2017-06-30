<?php 
if (isset($_POST['firstName']) && isset($_POST['lastName'])&& isset($_POST['email']) && isset($_POST['password'])) {
	require_once'../modelo/MUser.php';
	setUser($_POST['firstName'],$_POST['lastName'],$_POST['email'],$_POST['password']);
	header('location:../index.php');
}
 ?>