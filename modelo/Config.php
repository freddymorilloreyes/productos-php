<?php 
require_once('Conexion.php');

function setRegistro($tabla,$campos,$array)
{
	$conectar= new Conexion();
	$conectar= $conectar->getConexion();
	$statement= $conectar->prepare("INSERT INTO $tabla 
		
		(cantidad, product_id)
		
		 VALUES 
		
		(
			for ($i=0; $i < count($campos); $i++) { 
			if ($i<count($campos)-1) {
				echo ':v'.$i.', ';
			}else{
			echo ':v'.$i;
			}
			}
		)");

	foreach ($array as $claves => $info) {
		$statement->bindparam(':v'.$claves , $info);
	}
	$statement->execute();
}
$a=array(5,18);
$campos=array('cantidad', 'product_id');
var_dump($a, $campos);
setRegistro('Pedidos',$campos,$a);

function getTabla($tabla)
{
	$conectar= new Conexion();
	$conectar=$conectar->getConexion();	
	$statement=$conectar->prepare("SELECT * FROM ".$tabla);
	$statement->execute();
	$arreglo=$statement->fetchAll(PDO::FETCH_ASSOC);
	return $arreglo;
}
 ?>