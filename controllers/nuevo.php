<?php

class Nuevo extends Controller{


	function __construct(){

		parent::__construct();
		$this->view->mensaje = "";

	}

	function render(){
		/*
		*
		* Regresamos a la vista
		*
		*/
		$this->view->render('nuevo/index');

	}

	function registrarAlumno(){

		$matricula =@$_POST['matricula'];
		$nombre    =@$_POST['nombre'];
		$apellido  =@$_POST['apellido'];

		$this->model->insert(['matricula' => $matricula, 'nombre' => $nombre, 'apellido' => $apellido]);

		$mensaje = "Nuevo alumno creado";

		$this->view->mensaje = $mensaje;
		$this->render();
	}

}

?>