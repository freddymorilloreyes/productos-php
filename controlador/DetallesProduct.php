<?php 
	//para que no puedan ingresar sin estar logeados
	session_start();
	require_once'VerificarInicioDeSession.php';
	VerificarInicioDeSession($_SESSION); 

if (isset($_GET['idProduct']) && isset($_GET['idCategory'])) {
	session_start();
	require_once'../modelo/Config.php';
	//he colocado la informacion en arreglos, ya que asi me lo pide la funcion getUnRegistro
		$arrayCampos=array('id');
		$idProduct=array('id' => $_GET['idProduct']);
		$idCategory=array('id' => $_GET['idCategory']);

	$detallesProduct=getUnRegistro('Product',$arrayCampos,$idProduct);
	$categoryP=getUnRegistro('ProductCategory',$arrayCampos,$idCategory);
	include_once'../vista/DetallesProduct.php';
}
 ?>