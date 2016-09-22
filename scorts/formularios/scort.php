<?php 
	$error=isset($_GET['id'])?$_GET['id']:'';
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../main.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
</head>
<body>

	<div class="row">
		<div class="col-md-1 col-xs-2"></div>
		<div class="col-md-10 col-xs-10" id="formulario">
			<div class="row">
			<center>
				<div class="col-md-12">
					<h1>Ingreso de Acompañantes</h1>
				</div>
				<div class="col-md-12">
				</div>
			</center>
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
							<label for="exampleInputEmail1">Alias:</label>
						</div>
						<div class="col-md-4">
							<input type="text" name="nombre_producto" placeholder="Zapato Dama">
						</div>
						<div class="col-md-2">
							<label>Color de Cabello:</label>
						</div>
						<div class="col-md-4">
							<input type="text" name="Tipo_producto" placeholder="Calzado">
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">
							<label>Arte Corporal:</label>
						</div>
						<div class="col-md-4">
							<input type="text" name="Tipo_producto" placeholder="Calzado">
						</div>
						<div class="col-md-2">
							<label>Estatura:</label>	
						</div>
						<div class="col-md-4">
							<input type="text" name="cantidad_producto" placeholder="50">
						</div>
					</div>				
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-md-2">
							<label>Peso:</label>	
						</div>
						<div class="col-md-4">
							<input type="text" name="cantidad_producto" placeholder="50">
						</div>
						<div class="col-md-2">
							<label>Color de Piel:</label>	
						</div>
						<div class="col-md-4">
							<input type="text" name="cantidad_producto" placeholder="50">
						</div>
					</div>				
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-md-2">
							<label>Medidas:</label>	
						</div>
						<div class="col-md-4">
							<input type="text" name="cantidad_producto" placeholder="50">
						</div>
						<div class="col-md-2">
							<label>Precio:</label>	
						</div>
						<div class="col-md-4">
							<input type="text" name="precio_producto" placeholder="20.50">
						</div>
					</div>				
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-md-2">
							<label>Lugar de Nacimiento:</label>	
						</div>
						<div class="col-md-4">
							<input type="text" name="cantidad_producto" placeholder="50">
						</div>
						<div class="col-md-2">
							<label>Estado:</label>	
						</div>
						<div class="col-md-4">
							<input type="text" name="cantidad_producto" placeholder="50">
						</div>
					</div>				
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-md-2">
							<label>Sexo:</label>	
						</div>
						<div class="col-md-4">
							<input type="text" name="cantidad_producto" placeholder="50">
						</div>
						<div class="col-md-2">
							<label for="exampleInputEmail1">Detalle:</label>
						</div>
						<div class="col-md-4">
							<textarea rows="5" cols="43" name="detalle_producto" placeholder="Zapato Dama talla 26"></textarea>
						</div>
					</div>				
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-md-2">
							<label>Imagen:</label>
						</div>
						<div class="col-md-4">
							<input type="file" name="imagen_producto" >	
						</div>
						<div class="col-md-2">
							<label>Imagen:</label>
						</div>
						<div class="col-md-4">
							<input type="file" name="imagen_producto" >	
						</div>
					</div>				
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-md-2">
							<label>Imagen:</label>
						</div>
						<div class="col-md-4">
							<input type="file" name="imagen_producto" >	
						</div>
						<div class="col-md-2">
							<label>Imagen:</label>
						</div>
						<div class="col-md-4">
							<input type="file" name="imagen_producto" >	
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