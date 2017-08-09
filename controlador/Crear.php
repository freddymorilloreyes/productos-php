<?php 
	require_once'../modelo/Config.php';
	include_once'../CabeceraHTML.php';
	include_once'../BarraNavegacion.php';
	if (count($_GET)>0) {
		switch ($_GET['accion']) {
			case 'newProduct':
			$arregloCategory=getAllTabla('ProductCategory', 'ORDER BY name ASC'); //para cargar la lista de las categorias
			include_once'../NewProduct.php';
				break;
			
			case 'newCategory':
			include_once'../NewCategoryProduct.html';
				break;

			case 'newUser':
			include_once'../NewUser.html';
				break;
		}
	}
	include_once'../PieHTML.php';

	if (count($_POST)>0) {
			$tabla= array_pop($_POST);//para quitar la tabla del arreglo Post, pues no me sirve que este allí 	
			$arrayCampos=array_keys($_POST);//para usar las claves de post como valores de un nuevo array
			setRegistro($tabla,$arrayCampos,$_POST);
			switch ($tabla) {
				case 'ProductCategory':
					$redirrecionarA='listCategories';
					break;
				case 'Product':
					$redirrecionarA='listProduct';
					break;
				case 'User':
					$redirrecionarA='listUsers';
					break;
			}
		header('location:MostrarLista.php?accion='.$redirrecionarA);

	}
 ?>