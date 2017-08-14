<?php 
	require_once'constantesYRutas.php';

function VerificarInicioDeSession($datos)
{	
	if (empty($datos)) {
		crearHeader(array(ERRORALINICIAR));	
	}	
}
function ValidarInicioDeSessionAdministrador($datos)
{
	if (empty($datos)) {
		crearHeader(array(ERRORALINICIAR));	
	}elseif (!($datos['email']=='root' && $datos['password']=='abdc1234')) {
		crearHeader(array(ACCIONUSER));	
	}
}

 ?>