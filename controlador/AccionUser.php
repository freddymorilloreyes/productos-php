<?php 
session_start(); 
require_once'../modelo/MCategoryProduct.php';
$arrayCategories=getCategoriesProduct();
require_once'../modelo/MProduct.php';
$arrayProducts=getProducts();
//var_dump($arrayProducts);
//var_dump($_SESSION);
if (count($_SESSION)>0){
	include_once'../CabeceraHTML.php';
	include_once'../BarraNavegacion.php';
	include_once'../PaginaInicio.php';
	include_once'../PieHTML.php';
}
 ?>