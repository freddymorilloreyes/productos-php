<?php 
if (count($_GET)>0) {
	require_once'../modelo/Config.php';

	foreach ($_GET as $key => $valorDado) {
		
	        $arrayCampos=array('id');
	        $infoABuscar=array($valorDado);
		switch ($key) {	
	    case 'idProduct':
	        $tabla='Product';
			deleteUnRegistro($tabla,$arrayCampos,$infoABuscar);
			header('location:ObtenerProduct.php');
	        break;
	    case 'idCategory':
			$tabla='ProductCategory';
			deleteUnRegistro($tabla,$arrayCampos,$infoABuscar);
			header('location:ObtenerCategoryProduct.php');
	        break;
	    case 'idPedido':
			$tabla='Pedidos';
			deleteUnRegistro($tabla,$arrayCampos,$infoABuscar);
			header('location:Carrito.php');
	        break;
	    case 'idUser':
			$tabla='User';
			deleteUnRegistro($tabla,$arrayCampos,$infoABuscar);
			header('location:../index.php');
	        break;
		}

	}

}
 ?>