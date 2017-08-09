<?php 
//esto es para pintar la informacion en el form
if (isset($_GET['id'])) {
require_once('../modelo/Config.php');
var_dump($_GET);
$accion= array_pop($_GET);//para quitar el accion del arreglo get, pues no me sirve que este allí 	
$arrayCampos=array_keys($_GET);//para usar las claves como valores de un nuevo array
$tabla='ProductCategory';
$arrayCategory=getUnRegistro($tabla,$arrayCampos,$_GET);
include_once'../CabeceraHTML.php';
include_once'../BarraNavegacion.php';
include_once('../EditarCategoryProduct.php');
include_once'../PieHTML.php';
}




//esto es para actualizar
if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['description'])) {
require_once('../modelo/Config.php');
updateRegistro($tabla,$arrayCamposABuscar,$infoDeCamposABuscar,$arrayCamposAModificar,$infoAModificar)
updateCategoryProduct($_POST['id'], $_POST['name'], $_POST['description']);
header('location:ObtenerCategoryProduct.php');
}
 ?>