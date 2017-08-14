 <?php 
//SALIRDECARP
define('SALIRDECARP','..');

//TABLAS
define('TABLACARRITO', 'carrito');
define('TABLAPEDIDOS', 'pedidos');
define('TABLAPRODUCT', 'product');
define('TABLAPRODUCTCATEGORY', 'productCategory');
define('TABLAUSER', 'user');

//CARPETAS
define('CARPETAMODELO', 'modelo');
define('CARPETAVISTA', 'vista');
define('CARPETACONTROLADOR', 'controlador');

//ARCHIVOS CONTROLADOR
define('ACCIONUSER', 'AccionUser.php');
define('CARRITOCONTROLADOR', 'Carrito.php');
define('ERRORALINICIAR', 'ErrorAlIniciar.php');
define('LOGUSER', 'LogUser.php');
define('MOSTRARCATEGORYPRODUCT', 'MostrarCategoryProduct.php');
define('MOSTRARPRODUCT', 'MostrarProduct.php');
define('MOSTRARUSER', 'MostrarUser.php');
define('PRODUCTENVENTA', 'ProductosEnVenta.php');
define('VERIFICARINICIODESESSION', 'VerificarInicioDeSession.php');

//ARCHIVOS MODELO
define('CONFIG', 'config.php');

//ARCHIVOS VISTA
define('CARRITOVIEW', 'Carrito.php');
define('DATOSINCORRECTOSVIEW', 'DatosIncorrectos.php');
define('DETALLESPRODUCTVIEW', 'DetallesProduct.php');
define('EDITARCATEGORYPRODUCTVIEW', 'EditarCategoryProduct.php');
define('EDITARPRODUCTVIEW', 'EditarProduct.php');
define('EDITARUSERVIEW', 'EditarUser.php');
define('INDEX', 'index.php');
define('LISTCATEGORYPRODUCT', 'ListCategoryProduct.php');
define('LISTPRODUCT', 'ListProduct.php');
define('LISTUSER', 'ListUser.php');
define('NEWCATEGORYPRODUCTVIEW', 'NewCategoryProduct.php');
define('NEWPRODUCTVIEW', 'NewProduct.php');
define('NEWUSERVIEW', 'NewUser.php');

//$A = crearStringRuta(array(VERIFICARINICIODESESSION));
//var_dump($A);

function crearStringRuta($arregloRuta)
{
	$cadena=null;
	foreach ($arregloRuta as $key => $string) {
		if ($key<count($arregloRuta)-1) {
				$cadena .= $string."/";
			}else{
				$cadena .= $string;	
			}
	}
	return $cadena;
}
function crearHeader($arreglo)
{	
	$cadena=crearStringRuta($arreglo);
	return header("location:".$cadena);
}
 ?>