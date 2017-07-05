<?php 
if (isset($_GET['id'])) {
	require_once'../modelo/MPedidos.php';
	deletePedido($_GET['id']);
	header('location:Carrito.php');
}

 ?>