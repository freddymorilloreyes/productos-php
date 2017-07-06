<?php 
//esto es para pintar la informacion en el form
if (isset($_GET['id'])) {
require_once('../modelo/MCategoryProduct.php');
$arrayCategory=getCategoryProduct($_GET['id']);
include_once'../CabeceraHTML.php';
include_once'../BarraNavegacion.php';
include_once('../EditarCategoryProduct.php');
include_once'../PieHTML.php';
}
//esto es para actualizar
if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['description'])) {
require_once('../modelo/MCategoryProduct.php');
updateCategoryProduct($_POST['id'], $_POST['name'], $_POST['description']);
header('location:ObtenerCategoryProduct.php');
}
 ?>