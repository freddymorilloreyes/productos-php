 <?php 
	include_once'CabeceraHTML.php';
	include_once'BarraNavegacion.php';
 ?>
	<header class="container">
		<h1>Nuevo Usuario</h1>
	</header>
	<div class="container">
		<form action="" method="post" class="form-horizotal">
			<div class="form-group">
				<label class="sr-only" for="firstName" >Firstname:</label>
				<input type="text" class="form-control" id="firstName" name="firstName" placeholder="FirstName" required>
			</div>
			<div class="form-group">
				<label class="sr-only" for="lastName" >Lastname:</label>
				<input type="text" class="form-control" id="LastName" name="lastName" placeholder="Lastname" required>
			</div>
			<div class="form-group">
				<label class="sr-only" for="email" >Email</label>
				<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
			</div>
			<div class="form-group">
				<label class="sr-only" for="password" >Password</label>
				<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
			</div>
			<div class="form-group">
				<button class="btn btn-primary">Registrar</button>
			</div>
		</form>
	</div>
<?php 	include_once'PieHTML.php';?>	