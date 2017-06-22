<?php 

if (isset($_GET['id'])) {
require_once('../modelo/MCategoryProduct.php');
$arrayCategory=getCategoryProduct($_GET['id']);
include_once('../EditarCategoryProduct.php');
}
if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['description'])) {
require_once('../modelo/MCategoryProduct.php');
updateCategoryProduct($_POST['id'], $_POST['name'], $_POST['description']);
header('location:../controlador/ObtenerCategoryProduct.php');
}
 ?>