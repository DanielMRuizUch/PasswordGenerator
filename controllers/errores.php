<?php

class Errores extends Controller{

	function __construct(){
		parent::__construct();
		$this->view->mensaje = "Hubo un error en la solicitud";
		$this->view->render('errores/index');
		
		//echo "<p>Error al cargar recurso</p>";

	}
}

?>