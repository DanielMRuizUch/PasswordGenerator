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

			<h1 class="center">Sección de consulta</h1>

			<table width="100%;">
				<tr>
					<th>Matricula</th>
					<th>Nombre</th>
					<th>Apellido</th>
				</tr>

				<?php
					include_once 'models/alumno.php';
					foreach($this->alumnos as $row){
						$alumno = new Alumno();
						$alumno = $row;
				?>

					<tr>
						<td><?php echo $alumno->matricula; ?></td>
						<td><?php echo $alumno->nombre; ?></td>
						<td><?php echo $alumno->apellido; ?></td>
						<td><a href="<?php echo constant('URL') . 'consulta/verAlumno/' . $alumno->matricula; ?>">Editar</a></td>
						<td><a href="<?php echo constant('URL') . 'consulta/eliminarAlumno/' . $alumno->matricula; ?>">Eliminar</a></td>
					</tr>

				<?php
					}
				?>
			</table>

		</div>

	<?php require 'views/footer.php' ?>
</body>
</html>