<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/estilos.css">
	<title>
	  	<?php if (isset($_SESSION)): ?>
			¡Hola! <?=$_SESSION['firstName']?> 
  		<?php endif ?>
	</title>
</head>
<body>
