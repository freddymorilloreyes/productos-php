<?php 

if (isset($_GET['idProduct']) && isset($_GET['idCategory'])) {
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