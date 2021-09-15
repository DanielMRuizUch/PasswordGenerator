<!DOCTYPE html>
<html>
<head lang="es">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php //echo constant('URL'); ?>public/css/default.css">
</head>
<body>
	<?php require 'views/header.php' ?>

		<div id="main">

			<h1 class="center">Sección de nuevo</h1>

			<div class="center">
				<?php //echo $this->mensaje; ?>
			</div>

			<form action="<?php //echo constant('URL'); ?>nuevo/registrarAlumno/" method="post">
				
				<p>
					<label for="matricula">Matricula</label><br>
					<input type="text" name="matricula" id="" required>
				</p>

				<p>
					<label for="nombre">Nombre</label><br>
					<input type="text" name="nombre" id="" required>
				</p>

				<p>
					<label for="Apellido">Apellido</label><br>
					<input type="text" name="apellido" id="" required>
				</p>

				<p>
					<input type="submit" name="form-register" id="" value="Registrar nuevo alumno">
				</p>

			</form>

		</div>

	<?php require 'views/footer.php' ?>
</body>
</html>