<?php 
session_start(); 
require_once'../modelo/MCategoryProduct.php';
$arrayCategories=getCategoriesProduct();
require_once'../modelo/MProduct.php';
$arrayProducts=getProducts();
//var_dump($arrayProducts);
//var_dump($_SESSION);
if ($_SESSION['email']=='root' && $_SESSION['password']=='abdc1234' && !isset($_GET['entrar']))
{
	include_once'../PagAdmin.php';
}
else 
{
include_once'../PaginaInicio.php';
}
 ?>