<!DOCTYPE html>
<html>
<head>
  <?php include "header.php"; ?>
  <title>Inicio</title>
</head>
<body>
	<!-- Inicio Navbar -->

  <?php include "navbar.php"; ?>

<!-- Fin navbar e inicio de tarjetas -->
<center>
<div class="row">

<div class="col-sm-12">
<div class="card">
      <div class="card-body">
      	<h1>Administracion</h1>
        <p class="card-text">Bienvenido</p>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Lista de Productos</h5>
        <p class="card-text"></p>
        <a href="productos.php" class="btn btn-primary">Lista</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
      	
        <h5 class="card-title">Añadir productos</h5>
        <p class="card-text"></p>
        <a href="addprod.php" class="btn btn-primary">Añadir</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        
        <h5 class="card-title">Añadir insumos</h5>
        <p class="card-text"></p>
        <a href="addins.php" class="btn btn-primary">Añadir</a>
      </div>
    </div>
  </div>
   <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
      	
        <h5 class="card-title">Añadir Proveedores</h5>
        <p class="card-text"></p>
        <a href="addprov.php" class="btn btn-primary">Añadir</a>
      </div>
    </div>
  </div>
</div>
</center>
<!-- Fin tarjetas e inicio del footer-->

<?php include "footer.php"; ?>

</body>
</html>