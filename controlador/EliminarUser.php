 <?php 
if (count($_GET)>0) {
	require_once'../modelo/Config.php';
	$arrayCampos=array_keys($_GET);//para usar las claves como valores de un nuevo array
	deleteUnRegistro('User',$arrayCampos,$_GET);
	header('location:MostrarUser.php');
}
 ?>