<?php 
require_once('Conexion.php');

function setProduct($name, $price, $active, $image, $product_category_id)
{
	$conectar= new Conexion();
	$conectar= $conectar->getConexion();
	$statement= $conectar->prepare("INSERT INTO Product (name, price, active, image, product_category_id) VALUES (:v1, :v2, :v3, :v4, :v5)");
	$statement->bindparam(':v1',$name);
	$statement->bindparam(':v2', $price);
	$statement->bindparam(':v3', $active);
	$statement->bindparam(':v4', $image);
	$statement->bindparam(':v5', $product_category_id);
	$statement->execute();
}

function getProducts()
{
	$conectar= new Conexion();
	$conectar= $conectar->getConexion();
	$statement=$conectar->prepare("SELECT * FROM Product");
	$statement->execute();
	$arreglo=$statement->fetchAll(PDO::FETCH_ASSOC);
	return $arreglo;
}


function getProduct($id)
{
	$conectar= new Conexion();
	$conectar= $conectar->getConexion();
	$statement=$conectar->prepare("SELECT * FROM Product WHERE id=:id");
	$statement->bindparam('id', $id);
	$statement->execute();
	$arreglo=$statement->fetch(PDO::FETCH_ASSOC);
	return $arreglo;
}

function deleteProduct($id)
{
	$conectar= new Conexion();
	$conectar= $conectar->getConexion();
	$statement=$conectar->prepare("DELETE FROM Product WHERE id=:id");
	$statement->bindparam(':id', $id);
	$statement->execute();
}

function updateProduct($id, $name, $price, $active, $image, $product_category_id)
{
	$conectar= new Conexion();
	$conectar= $conectar->getConexion();
	$statement= $conectar->prepare("UPDATE Product SET name=:v1, price=:v2, active=:v3, image=:v4, product_category_id=:v5 WHERE id=:id");
	$statement->bindparam(':id',$id);
	$statement->bindparam(':v1',$name);
	$statement->bindparam(':v2', $price);
	$statement->bindparam(':v3', $active);
	$statement->bindparam(':v4', $image);
	$statement->bindparam(':v5', $product_category_id);
	$statement->execute();
}

 ?>