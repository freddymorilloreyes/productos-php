<?php
require_once('Conexion.php');

function setPedido($cantidad, $product_id)
{
	$conectar= new Conexion();
	$conectar= $conectar->getConexion();
	$statement= $conectar->prepare("INSERT INTO Pedidos (cantidad, product_id) VALUES (:cantidad, :product_id)");
	$statement->bindparam(':cantidad', $cantidad);
	$statement->bindparam(':product_id', $product_id);
	$statement->execute();
}

function getPedido()
{
	$conectar= new Conexion();
	$conectar=$conectar->getConexion();	
	$statement=$conectar->prepare("SELECT * FROM Pedidos");
	$statement->execute();
	$arreglo=$statement->fetchAll(PDO::FETCH_ASSOC);
	return $arreglo;
}

function deletePedido($id)
{
	$conectar= new Conexion();
	$conectar= $conectar->getConexion();
	$statement=$conectar->prepare("DELETE FROM Pedidos WHERE id=:id");
	$statement->bindparam(':id', $id);
	$statement->execute();
}

function deletePedidos()
{
	$conectar= new Conexion();
	$conectar= $conectar->getConexion();
	$statement=$conectar->prepare("DELETE FROM ProductCategory");
	$statement->execute();
}

 ?>