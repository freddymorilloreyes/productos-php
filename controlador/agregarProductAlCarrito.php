<?php 
	require_once'constantesYRutas.php';
	//para que no puedan ingresar sin estar logeados
	session_start();
	require_once crearStringRuta(array(VERIFICARINICIODESESSION));
	VerificarInicioDeSession($_SESSION); 

	include_once crearStringRuta(array(SALIRDECARP,CARPETAMODELO,CONFIG));
	//para cargar los productos que ya estan en el carrito la idea es comparar con los que van a ingresar
	$productoYaEnElCarrito=getAllTabla(TABLACARRITO);
	if (count($_POST)>0) {
		//verificar si el producto ya esta en el carrito en caso de ser asi actualizar la cantidad
		foreach ($productoYaEnElCarrito as $key => $info) {
			if ($info['product_id']==$_POST['product_id']) {
			//para tener la cantidad de unidades de este producto que ya hay en el carrito
				$infoProductExistente=getUnRegistro(TABLACARRITO,array('product_id'),$_POST);
			//esto es para actualizar
				$camposABuscar=array('product_id');
				$infoContenidaEnCamposABuscar=array($info['product_id']);
				$camposDelRegistro=array('cantidad');
				$infoAInsertar=array('cantidad'=> $infoProductExistente['cantidad']+$_POST['cantidad']);//es necesario que el arreglo sea asi, para que la funcion pueda ejecutarse bien
				updateRegistro(TABLACARRITO,$camposABuscar,$infoContenidaEnCamposABuscar,$camposDelRegistro,$infoAInsertar);
				crearHeader(array(CARRITOCONTROLADOR));
				die();
			}
		}
			$arrayCampos=array_keys($_POST);//para usar las claves de post como valores de un nuevo array
			crearRegistro(TABLACARRITO,$arrayCampos,$_POST);
			crearHeader(array(CARRITOCONTROLADOR));
	}

 ?>