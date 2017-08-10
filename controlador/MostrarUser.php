<?php 
	require_once'../modelo/Config.php';
	$arreglo=getAllTabla('User', 'ORDER BY firstName ASC');
	require_once'../vista/ListUser.php';
 ?>