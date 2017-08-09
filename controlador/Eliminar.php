<?php 
if (count($_GET)>0) {
	require_once'../modelo/Config.php';
	$accion= array_pop($_GET);//para quitar el accion del arreglo get, pues no me sirve que este allí 	
	$arrayCampos=array_keys($_GET);//para usar las claves como valores de un nuevo array
	switch ($accion) {	
	    case 'deleteCategory':
	        $tabla='ProductCategory';
	        break;
	    case 'deleteProduct':
			$tabla='Product';
	        break;
	    case 'deleteUser':
			$tabla='User';
	        break;
	}
	deleteUnRegistro($tabla,$arrayCampos,$_GET);
}
switch ($accion) {	
	    case 'deleteCategory':
			$redirrecionarA='listCategories';
	        break;
	    case 'deleteProduct':
			$redirrecionarA='listProduct';
	        break;
	    case 'deleteUser':
			$redirrecionarA='listUsers';
			break;
	}
	header('location:MostrarLista.php?accion='.$redirrecionarA);

 ?>