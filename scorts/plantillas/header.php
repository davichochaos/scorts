<!DOCTYPE html>
<meta charset="utf-8">
	<title>SkyLuxo</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
  <link rel="stylesheet" type="text/css" href="./main.css">
<header>

<div class="row">
	<div class="col-md-2">
		<div class="navbar-header">
      		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        		<span class="sr-only">Toggle navigation</span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
      		</button>
          <img class="img-logo" src="https://upload.wikimedia.org/wikipedia/commons/a/ab/Logo_TV_2015.png">
      		<!--a class="navbar-brand" href="#">Logo</a-->
    	</div>
	</div>
	<div class="col-md-3">
		<form class="navbar-form navbar-center ">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar">
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
      </form>
	</div>
	<div class="col-md-2">
    <div class="centrar">
        CONTACTOS: 0913014638
    </div>
	</div>
	<div class="col-md-5">
    <form class="form-inline">
              <div class="form-group">
                <label class="sr-only" for="usario">Usuario</label>
                <input class="form-control" id="usuario" placeholder="Usuario">
              </div>
              <div class="form-group">
                <label class="sr-only" for="contraseña">Contraseña</label>
                <input type="password" class="form-control" id="contraseña" placeholder="Contraseña">
              </div>
              <button type="submit" class="btn btn-default" >Entrar</button>
              <!--button type="button" class="btn btn-default" data-dismiss="modal">Close</button-->
            </form>    
	</div>	
</div>

<div class="row centrar">
	<nav class="navbar navbar-default">
  <div class="container-fluid">

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">INICIO</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ACOMPAÑANTES <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="hombre.php">HOMBRES</a></li>
            <li><a href="mujer.php">MUJERES</a></li>
          </ul>
        </li>
        <li><a href="licor.php">LICORES</a></li>
        <li><a href="lugar.php">HOTELES</a></li>
        <li><a href="transporte.php">TRANSPORTE</a></li>
        <li><a href="tienda.php">SEXSHOP</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
</header>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
