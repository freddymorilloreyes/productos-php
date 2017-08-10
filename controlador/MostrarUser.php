<?php 
	//para que no puedan ingresar sin ser administradores
	session_start();
	require_once'VerificarInicioDeSession.php';
	ValidarInicioDeSessionAdministrador($_SESSION); 
	
	require_once'../modelo/Config.php';
	$arreglo=getAllTabla('User', 'ORDER BY firstName ASC');
	require_once'../vista/ListUser.php';
 ?>