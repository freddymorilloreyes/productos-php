<?php 
function VerificarInicioDeSession($datos)
{	
	if (empty($datos)) {
		header('location:ErrorAlIniciar.php');
	}	
}
function ValidarInicioDeSessionAdministrador($datos)
{
	if (empty($datos)) {
		header('location:ErrorAlIniciar.php');
	}elseif (!($datos['email']=='root' && $datos['password']=='abdc1234')) {
			header('location:AccionUser.php');
	}
}

 ?>