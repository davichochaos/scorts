<?php 
	$error=isset($_GET['id'])?$_GET['id']:'';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Insertar Lugar</title>
	<link rel="stylesheet" type="text/css" href="../main.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
</head>
<body>

	<div class="row">
		<div class="col-md-1 col-xs-2"></div>
		<div class="col-md-10 col-xs-10" id="formulario">
			<div class="row">
			<h1>Ingreso de Lugares</h1>
			<div class="centrar">
				<?php
				switch ($error) {
					case '1':
						echo "<h4 class='alert alert-danger'>Debe llenar todos los campos.</h4>";
						break;
					case '2':
						echo "<h4 class='alert alert-danger'>El precio debe ser un valor númerico o debe llevar punto (.) como separador de decimales.</h4>";
						break;
					case '3':
						echo "<h4 class='alert alert-danger'>La cantidad debe ser un valor númerico.</h4>";
						break;
				}
				?>
			</div>
			<br>
			<form action="insertarP.php" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">
							<label for="exampleInputEmail1">Nombre:</label>
						</div>
						<div class="col-md-4">
							<input type="text" name="nombre_producto" placeholder="Zapato Dama">
						</div>
						
					</div>
				</div>
				
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">
							<label>Region:</label>
						</div>
						<div class="col-md-4">
							<select>
								<option></option>
							</select>
						</div>
						
					</div>				
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-md-2">
							<label>Ciudad:</label>
						</div>
						<div class="col-md-4">
							<select>
								<option></option>
							</select>
						</div>
						
					</div>				
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-md-2">
							<label>Descripcion de Habitacion:</label>	
						</div>
						<div class="col-md-4">
							<textarea rows="5" cols="43" name="detalle_producto" placeholder="Zapato Dama talla 26"></textarea>
						</div>
					</div>				
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-md-2">
							<label>Categoria:</label>
						</div>
						<div class="col-md-4">
							<input type="text" name="cantidad_producto" placeholder="50">
						</div>
						
					</div>				
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-md-2">
							<label>Precio de Habitacion:</label>
						</div>
						<div class="col-md-4">
							<input type="text" name="cantidad_producto" placeholder="50">
						</div>
						
					</div>				
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-md-2">
							<label>Tipo de Lugar:</label>
						</div>
						<div class="col-md-4">
							<select>
								<option></option>
							</select>
						</div>
						
					</div>				
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-md-2">
							<label>Zona:</label>
						</div>
						<div class="col-md-4">
							<input type="text" name="cantidad_producto" placeholder="50">
						</div>
						
					</div>				
				</div>
				
				<div class="form-group">
					<div class="row">
						<div class="col-md-12 col-xs-12">
							<input type="submit" class="btn btn-default" value="Registar">
						</div>
					</div>				
				</div>
			</form>
			</div>
		</div>
		<div class="col-md-1 col-xs-2"></div>
	</div>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</html>