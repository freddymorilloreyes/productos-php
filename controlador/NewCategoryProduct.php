<?php
	include_once'../CabeceraHTML.php';
	include_once'../BarraNavegacion.php';
	include_once'../NewCategoryProduct.html';
	include_once'../PieHTML.php';

if (isset($_POST['name']) && isset($_POST['description'])) {
	require_once('../modelo/MCategoryProduct.php');
	setCategoryProduct($_POST['name'], $_POST['description']);
	header('location:ObtenerCategoryProduct.php');
}

 ?>