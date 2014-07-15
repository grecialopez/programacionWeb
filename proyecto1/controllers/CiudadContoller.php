<?php
	class CiudadController extends Ciudad {
		
		public $muestra_errores = false;
		function __construct(){
			
		}
		public function insertaCiudad($datos){
				echo "<pre>datos";
			  	print_r($datos);
			  	echo"</pre>";
				$ciudad = new Equipo(); //instanciar el objeto
				$ciudad->set_nombre($datos['nombre']); //establecer el valor
				
				
		}
}


?>