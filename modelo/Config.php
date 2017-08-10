 <?php 
require_once('Conexion.php');
require_once('MFunctions.php');
//($tabla,$campos,$array)

function crearRegistro($tabla,$arrayCampos,$infoAInsertar)
{
	/*esta función recibirá un string con el nombre de la tabla donde se quiere insertar el registro, un arreglo con los campos a insertar y otro arreglo con la información que será insertada. estos arreglos vendrán por post*/
	$cadenaCampos=generarCadenaCampos($arrayCampos);
	$cadenaVALUES=generarCadenaVALUES($arrayCampos);
	$conectar= new Conexion();
	$conectar= $conectar->getConexion();
	$statement= $conectar->prepare("INSERT INTO $tabla ($cadenaCampos) VALUES ($cadenaVALUES)");
	foreach ($arrayCampos as $campo) {
		$statement->bindparam(':'.$campo,$infoAInsertar[$campo]);
	}
	$statement->execute();
}



function getAllTabla($tabla, $stringOrdenarLista=null)
{
	/*esta función recibirá un string con el nombre de la tabla a obtener y otro posible string en caso de querer ordenar la lista obtenida*/
	$conectar= new Conexion();
	$conectar=$conectar->getConexion();	
	$statement=$conectar->prepare("SELECT * FROM $tabla $stringOrdenarLista");
	$statement->execute();
	$arreglo=$statement->fetchAll(PDO::FETCH_ASSOC);
	return $arreglo;
}

function getUnRegistro($tabla,$arrayCampos,$infoABuscar)
{
	/*Para buscar un registro dependiento de algunos parametros, los argumentos $arrayCampos e $infoABuscar deben ser arreglos*/
	$cadenaWHERE=generarCadenaWHERE($arrayCampos);
	$conectar= new Conexion();
	$conectar= $conectar->getConexion();
	$statement= $conectar->prepare("SELECT * FROM $tabla WHERE $cadenaWHERE");
	foreach ($arrayCampos as $campo) {
		$statement->bindparam(':'.$campo,$infoABuscar[$campo]);
	}	
	$statement->execute();
	$arreglo=$statement->fetch(PDO::FETCH_ASSOC);
	return $arreglo;
}

function deleteUnaTabla($tabla)
{
	/*borrará todos los registro de una tabla pasada por el argumento como un string*/
	$conectar= new Conexion();
	$conectar= $conectar->getConexion();
	$statement=$conectar->prepare("DELETE FROM $tabla");
	$statement->execute();
}

function deleteUnRegistro($tabla,$arrayCampos,$infoABuscar)
{
	/*Borrará un registro recibiendo el nombre de la tabla, los campos a evaluar y los valores buscados recibe arreglos $arrayCampos e $infoAbuscar*/
	$cadenaWHERE=generarCadenaWHERE($arrayCampos);
	$conectar= new Conexion();
	$conectar=$conectar->getConexion();
	$statement=$conectar->prepare("DELETE FROM $tabla WHERE $cadenaWHERE");
	foreach ($arrayCampos as $campo) {
		$statement->bindparam(':'.$campo,$infoABuscar[$campo]);
	}	
	$statement->execute();
}

function updateRegistro($tabla,$camposABuscar,$infoDeCamposABuscar,$camposDelRegistro,$infoAInsertar)
{
	/*
	actualizará un registro recibiendo un string con el nombre de la tabla donde está el registro, un arreglo con los campos que se usarán para buscar el registro y un arreglo con la informacion para tal busqueda, además recibirá un arreglo con los campos que serán modificados y un arreglo con la informacion que se va a insertar en el registro
	*/
	$cadenaSET=generarCadenaSET($camposDelRegistro);
	$cadenaWHERE=generarCadenaWHERE($camposABuscar);
	$conectar= new Conexion();
	$conectar= $conectar->getConexion();
	$statement= $conectar->prepare("UPDATE $tabla SET $cadenaSET WHERE $cadenaWHERE");
	foreach ($camposABuscar as $clave => $campoWHERE) {
		$statement->bindparam(':'.$campoWHERE,$infoDeCamposABuscar[$clave]);
	}//esto es lo que va en la sentencia despues del WHERE es decir para encotrar
	foreach ($camposDelRegistro as $campo) {
		$statement->bindparam(':'.$campo,$infoAInsertar[$campo]);
	}	//esto es lo que va en la sentencia despues del SET es decir para modificar

	$statement->execute();
}
 ?>