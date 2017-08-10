 <?php 
	require_once'../modelo/Config.php';
	$arrayCampos=array_keys($_GET);//para usar las claves como valores de un nuevo array
	deleteUnRegistro('ProductCategory',$arrayCampos,$_GET);
	header('location:MostrarCategoryProduct.php');
 ?>