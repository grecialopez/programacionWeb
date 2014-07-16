<?php
	class AutorController{
		
		public $muestra_errores = false;
		function __construct(){
			
		}
		public function insertaAutor($datos){
				echo "<pre>datos";
			  	print_r($datos);
			  	echo"</pre>";
				$autor = new Autor(); //instanciar el objeto
				$autor->set_nombre($datos['nombre']); //establecer el valor
				$autor->set_apellidos($datos['apellidos']); //establecer el valor
				$autor->set_email($datos['email']); //establecer el valor
				
				if(count($autor->errores)>0){
				print_r($autor->errores);	}

			$autor->inserta($autor->get_atributos());
				
		}












}


?>