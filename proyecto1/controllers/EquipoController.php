<?php
	class EquipoController extends Equipo{
		
		public $muestra_errores = false;
		function __construct(){
			
		}
		public function insertaEquipo($datos){
				echo "<pre>datos";
			  	print_r($datos);
			  	echo"</pre>";
				$equipo = new Equipo(); //instanciar el objeto
				$equipo->set_nombre($datos['nombre']); //establecer el valor
				$equipo->set_idpais($datos['idpais']); //establecer el valor
				$equipo->set_escudo($datos['escudo']); //establecer el valor

				if(count($equipo->errores)>0){
				print_r($equipo->errores);
		}
				
		}

		

}


?>