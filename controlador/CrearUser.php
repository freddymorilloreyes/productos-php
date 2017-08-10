<?php 
	require_once'../modelo/Config.php';
	if (count($_POST)>0) {
			$arrayCampos=array_keys($_POST);//para usar las claves de post como valores de un nuevo array
			crearRegistro('User',$arrayCampos,$_POST);
			var_dump($_POST);
		header('location:MostrarUSer.php');
	}
	require_once'../vista/NewUser.php';


 ?>