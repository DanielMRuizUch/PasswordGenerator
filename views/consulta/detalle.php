<!DOCTYPE html>
<html>
<head lang="es">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/default.css">
</head>
<body>
	<?php require 'views/header.php' ?>

		<div id="main">

			<h1 class="center">Detalle de <?php echo $this->alumno->matricula; ?></h1>

			<div class="center">
				<?php echo $this->mensaje; ?>
			</div>

			<form action="<?php echo constant('URL'); ?>consulta/actualizarAlumno" method="post">
				
				<p>
					<label for="matricula">Matricula</label><br>
					<input type="text" name="matricula" id="" required value="<?php echo $this->alumno->matricula; ?>">
				</p>

				<p>
					<label for="nombre">Nombre</label><br>
					<input type="text" name="nombre" id="" required value="<?php echo $this->alumno->nombre; ?>">
				</p>

				<p>
					<label for="Apellido">Apellido</label><br>
					<input type="text" name="apellido" id="" required value="<?php echo $this->alumno->apellido; ?>">
				</p>

				<p>
					<input type="submit" name="form-update" id="" value="Actualizar alumno">
				</p>

			</form>

		</div>

	<?php require 'views/footer.php' ?>
</body>
</html>