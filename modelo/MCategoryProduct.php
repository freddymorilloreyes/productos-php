<?php
require_once('Conexion.php');

function setCategoryProduct($name, $description)
{
	$conectar= new Conexion();
	$conectar= $conectar->getConexion();
	$statement= $conectar->prepare("INSERT INTO ProductCategory (name, description) VALUES (:name, :description)");
	$statement->bindparam(':name', $name);
	$statement->bindparam(':description', $description);
	$statement->execute();
}

function getCategoriesProduct()
{
	$conectar= new Conexion();
	$conectar=$conectar->getConexion();	
	$statement=$conectar->prepare("SELECT * FROM ProductCategory ORDER BY name ASC");
	$statement->execute();
	$arreglo=$statement->fetchAll(PDO::FETCH_ASSOC);
	return $arreglo;
}

function getCategoryProduct($id)
{
	$conectar= new Conexion();
	$conectar=$conectar->getConexion();	
	$statement=$conectar->prepare("SELECT * FROM ProductCategory WHERE id=:id");
	$statement->bindparam(':id', $id);
	$statement->execute();
	$arreglo=$statement->fetch(PDO::FETCH_ASSOC);
	return $arreglo;
}


function deleteCategoryProduct($id)
{
	$conectar= new Conexion();
	$conectar= $conectar->getConexion();
	$statement=$conectar->prepare("DELETE FROM ProductCategory WHERE id=:id");
	$statement->bindparam(':id', $id);
	$statement->execute();
}

function updateCategoryProduct($id, $name, $description)
{
	$conectar= new Conexion();
	$conectar=$conectar->getConexion();
	$statement=$conectar->prepare("UPDATE ProductCategory SET name=:name, description=:description WHERE id=:id");
	$statement->bindparam(':id', $id);
	$statement->bindparam(':name', $name);
	$statement->bindparam(':description', $description);
	$statement->execute();
}

 ?>