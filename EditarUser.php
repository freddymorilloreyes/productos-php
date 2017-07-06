	<header class="container">
		<h1>Edit User</h1>
	</header>
	<div class="container">
		<form action="" method="post" class="form-horizotal">
			<div class="form-group">
				<label class="sr-only" for="firstName" >Firstname:</label>
				<input type="text" class="form-control" id="firstName" name="firstName" placeholder="FirstName" value="<?=$_SESSION['firstName']?>" required>
			</div>
			<div class="form-group">
				<label class="sr-only" for="lastName" >Lastname:</label>
				<input type="text" class="form-control" id="LastName" name="lastName" placeholder="Lastname" value="<?=$_SESSION['lastName']?>" required>
			</div>
			<div class="form-group">
				<label class="sr-only" for="email" >Email:</label>
				<input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?=$_SESSION['email']?>" required>
			</div>
			<div class="form-group">
				<label class="sr-only" for="password" >Password:</label>
				<input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?=$_SESSION['password']?>"  required>
			</div>
			<div class="form-group"><input type="hidden" name="id" value="<?=$_SESSION['id']?>"></div>
			<div class="form-group">
				<button class="btn btn-primary">Actualizar</button>
			</div>
		</form>
	</div>