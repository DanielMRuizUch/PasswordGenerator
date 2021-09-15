<?php 

require_once 'controllers/errores.php';

class App{

	function __construct(){

		//echo "<p>Nueva app</p>";

		$url = isset($_GET['url']) ? $_GET['url']: null;
		$url = rtrim($url, '/');
		$url = explode('/', $url);

		//cuando se ingresa sin definir controlador
		if(empty($url[0])){

			$Archivo_Controller = 'controllers/main.php';
			require_once $Archivo_Controller;
			$controller = new Main();
			$controller->loadModel('main');
			$controller->render();
			return false;

		}
		
		$Archivo_Controller = 'controllers/' . $url[0] . '.php';

		//valido si existe el controller
		if(file_exists($Archivo_Controller)){

			require_once $Archivo_Controller;

			//inicializar el controlador
			$controller = new $url[0];
			$controller->loadModel($url[0]);

			#cantidad de elementos del arreglo
			$nparam = sizeof($url);

			if($nparam > 1){
				if($nparam > 2){

					$param = [];

					for($i = 2; $i < $nparam; $i++){
						array_push($param, $url[$i]);
					}

					$controller->{$url[1]}($param);

				}else{

					$controller->{$url[1]}();

				}
			}else{

				$controller->render();

			}

		}else{

			$controller = new Errores();

		}

	}
}

?>