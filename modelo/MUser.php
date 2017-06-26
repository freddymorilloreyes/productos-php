<?php 
require_once('Conexion.php');

function setUser($firstName, $lastName, $email, $password)
{
	$conectar= new Conexion();
	$conectar= $conectar->getConexion();
	$statement=$conectar->prepare("INSERT INTO User (firstName, lastName, email, password) VALUES (:v1, :v2, :v3, :v4)");
	$statement->bindparam(':v1',$firstName);
	$statement->bindparam(':v2', $lastName);
	$statement->bindparam(':v3', $email);
	$statement->bindparam(':v4', $password);
	$statement->execute();
}

function getUsers()
{
	$conectar= new Conexion();
	$conectar= $conectar->getConexion();
	$statement= $conectar->prepare("SELECT * FROM User");
	$statement->execute();
	$arreglo=$statement->fetchAll(PDO::FETCH_ASSOC);
	return $arreglo;
}
function getUser($email, $password)
{
	$conectar= new Conexion();
	$conectar= $conectar->getConexion();
	$statement= $conectar->prepare("SELECT * FROM User WHERE email=:email AND password=:password");
	$statement->bindparam(':email', $email);
	$statement->bindparam(':password', $password);
	$statement->execute();
	$arreglo=$statement->fetch(PDO::FETCH_ASSOC);
	return $arreglo;
}

function deleteUser($id)
{
	$conectar= new Conexion();
	$conectar= $conectar->getConexion();
	$statement= $conectar->prepare("DELETE FROM User WHERE id=:id");
	$statement->bindparam(':id', $id);
	$statement->execute();
}

function updateUser($id, $firstName, $lastName, $email, $password)
{
	$conectar= new Conexion();
	$conectar=$conectar->getConexion();
	$statement=$conectar->prepare("UPDATE User SET firstName=:v1, lastName=:v2, email=:v3, password=:v4 WHERE id=:id");
	$statement->bindparam(':id', $id);
	$statement->bindparam(':v1', $firstName);
	$statement->bindparam(':v2', $lastName);
	$statement->bindparam(':v3', $email);
	$statement->bindparam(':v4', $password);
	$statement->execute();
}

 ?>