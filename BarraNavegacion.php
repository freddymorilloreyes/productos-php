<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
           <h2>¡La Tienda!</h2>
  <?php if (isset($_SESSION)): ?>
    <p>Hola <?=$_SESSION['firstName'] ." ".$_SESSION['lastName'];?></p>
  <?php endif ?>
        <div class="navbar-header">
          <a class="navbar-brand" href="AccionUser.php"><span class="glyphicon glyphicon-home" ></span></a>
        </div>
  <?php if (isset($_SESSION)): ?>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a class="glyphicon glyphicon-shopping-cart" href="Carrito.php"></a></li>
            <!--Este if es para las opciones del administrador/!-->
            <?php if ($_SESSION['email']=='root' && $_SESSION['password']=='abdc1234'): ?>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Acciones de Administrador<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="ObtenerProduct.php">Administrar Productos</a></li>
                <li><a href="ObtenerCategoryProduct.php">administrar Categorias</a></li>
              </ul>
             </li>
            <?php endif ?>
          </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Acciones <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="EditarUser.php">Editar Usuario</a></li>
             <li><a href="#">Eliminar Cuenta</a></li>
            </ul>
          </li>
        <li><a class="glyphicon glyphicon-off" href="Logout.php"></a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
  <?php endif ?>
    </div><!-- /.container-fluid -->
  </nav>
</header>