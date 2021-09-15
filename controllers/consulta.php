<?php

class Consulta extends Controller{


	function __construct(){
		parent::__construct();
		$this->view->alumnos = [];
		//$this->view->render('consulta/index');
		//echo "<p>Nuevo controlador main</p>";
	}

	function render(){

		$alumnos = $this->model->get();
		$this->view->alumnos = $alumnos;
		$this->view->render('consulta/index');

	}

	function verAlumno($param = null){

		//var_dump($param);
		$idAlumno = $param[0];
		$alumno = $this->model->getById($idAlumno);

		session_start();
		$_SESSION['id_verAlumno'] = $alumno->matricula;
		$this->view->alumno = $alumno;
		$this->view->mensaje = "";
		$this->view->render('consulta/detalle');

	}

	function actualizarAlumno(){

		session_start();
		$matricula = $_SESSION['id_verAlumno'];
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];

		unset($_SESSION['id_verAlumno']);

		if($this->model->update(['matricula' => $matricula, 'nombre' => $nombre, 'apellido' => $apellido])){

			//actualizacion exitosa

			$alumno = new Alumno();
			$alumno->matricula = $matricula;
			$alumno->nombre = $nombre;
			$alumno->apellido = $apellido;

			$this->view->alumno = $alumno;
			$this->view->mensaje = "Alumno actualizado";

		}else{

			//error al actualizar
			$this->view->mensaje = "No se puedo actualizar los datos del alumno";
		}

		$this->view->render('consulta/detalle');

	}

	function eliminarAlumno($param = null){

		$matricula = $param[0];

		if($this->model->delete($matricula)){

			//borrado exitoso

			$this->view->mensaje = "Alumno eliminado";

		}else{

			//error al actualizar
			$this->view->mensaje = "No se puedo eliminar al alumno";
		}

		$this->render();

	}
}

?>