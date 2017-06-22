<?php 
if (isset($_GET['id'])) {
require_once('../modelo/MCategoryProduct.php');
	deleteCategoryProduct($_GET['id']);
	header('location:../controlador/ObtenerCategoryProduct.php');
}

 ?>