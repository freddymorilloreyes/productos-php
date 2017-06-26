<?php 
if (isset($_GET['id'])) {
	require_once'../modelo/MUser.php';
	deleteUser($_GET['id']);
	header('location:../index.html');
}
 ?>