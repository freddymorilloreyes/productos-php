 <?php
 session_start(); 
if (count($_GET)>0) {
	require_once'constantesYRutas.php';
	include_once crearStringRuta(array(SALIRDECARP,CARPETAMODELO,CONFIG));
	$arrayCampos=array_keys($_GET);//para usar las claves como valores de un nuevo array
	deleteUnRegistro(TABLAUSER,$arrayCampos,$_GET);
	if ($_SESSION['email']=='root' && $_SESSION['password']=='abdc1234') {
		crearHeader(array(MOSTRARUSER));
	}else{
		session_destroy();
		crearHeader(array(ACCIONUSER));
	}
}
 ?>