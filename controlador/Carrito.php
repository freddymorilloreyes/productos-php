 <?php 
require_once'../modelo/MPedidos.php';
require_once'../modelo/MProduct.php';
if (isset($_POST['cantidad']) && isset($_POST['product_id'])) {
setPedido($_POST['cantidad'],$_POST['product_id']);
}
	$arrayPedidos=getPedido();
	$arrayProduct=getProducts();
	include_once'../CabeceraHTML.php';
	include_once'../BarraNavegacion.php';
	include_once'../Carrito.php';
	include_once'../PieHTML.php';
 ?>