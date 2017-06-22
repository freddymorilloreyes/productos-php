<?php

if (isset($_POST['name']) && isset($_POST['description'])) {
	require_once('../modelo/MCategoryProduct.php');
	setCategoryProduct($_POST['name'], $_POST['description']);
	header('location:ObtenerCategoryProduct.php');
}

 ?>