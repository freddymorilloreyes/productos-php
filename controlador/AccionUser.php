<?php 
session_start(); 
require_once'../modelo/MCategoryProduct.php';
$arrayCategories=getCategoriesProduct();
require_once'../modelo/MProduct.php';
$arrayProducts=getProducts();
//var_dump($arrayProducts);
//var_dump($_SESSION);
include_once'../PaginaInicio.php';







 ?>