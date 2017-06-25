<?php 
if (isset($_GET['id'])) {
require_once'../modelo/MProduct.php';
deleteProduct($_GET['id']);
header('location:ObtenerProduct.php');
}
 ?>