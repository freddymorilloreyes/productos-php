<?php 
if (count($_POST)>0) {
		require_once'../modelo/Config.php';
		$infoAInsertar = $_POST;
		$arrayCampos=array_keys($_POST);
		var_dump($_SERVER['HTTP_REFERER'],$_POST);
		switch ($_SERVER['HTTP_REFERER']) {
			case 'http://localhost/cruds/productos-php/controlador/NewUser.php':
				$tabla='User';
				setRegistro($tabla,$arrayCampos,$infoAInsertar);
				header('location:../index.php');
				break;			
				case 'http://localhost/cruds/productos-php/controlador/NewProduct.php':
				$tabla='Product';
				setRegistro($tabla,$arrayCampos,$infoAInsertar);
				header('location:ObtenerProduct.php');
				break;			
				case 'http://localhost/cruds/productos-php/controlador/NewCategoryProduct.php':
				$tabla='ProductCategory';
				setRegistro($tabla,$arrayCampos,$infoAInsertar);				
				header('location:ObtenerCategoryProduct.php');
				break;	
				default:
				$tabla='Pedidos';
				setRegistro($tabla,$arrayCampos,$infoAInsertar);				
				header('location:Carrito.php');
				break;		
				
		}

}
 ?>