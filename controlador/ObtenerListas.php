<?php 
if (count($_GET)>0) {
	switch ($_GET['accion']) {
		case 'listProduct':
		$arregloCategory=getAllTabla('ProductCategory'); //para cargar la lista de las categorias
		$arreglo=getAllTabla('Product', 'ORDER BY name ASC');
		//var_dump($arregloCategory, $arreglo);
		include_once'../ListProduct.php';
			break;
		
		case 'listCategories':
		$arreglo=getAllTabla('ProductCategory', 'ORDER BY name ASC');
		include_once'../ListCategoryProduct.php';
			break;

		case 'listUsers':
		$arreglo=getAllTabla('User', 'ORDER BY firstName ASC');
		include_once'../ListUsers.php';
			break;
	}
}



 ?>