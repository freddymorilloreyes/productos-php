 <?php 
	require_once'constantesYRutas.php';
	session_start();
	if (isset($_GET['idProduct']) && isset($_GET['idCategory'])) {
		include_once crearStringRuta(array(SALIRDECARP,CARPETAMODELO,CONFIG));
		//he colocado la informacion en arreglos, ya que asi me lo pide la funcion getUnRegistro
			$arrayCampos=array('id');
			$idProduct=array('id' => $_GET['idProduct']);
			$idCategory=array('id' => $_GET['idCategory']);

		$detallesProduct=getUnRegistro(TABLAPRODUCT,$arrayCampos,$idProduct);
		$categoryP=getUnRegistro(TABLAPRODUCTCATEGORY,$arrayCampos,$idCategory);
		
		include_once crearStringRuta(array(SALIRDECARP,CARPETAVISTA,DETALLESPRODUCTVIEW));
	}
 ?>