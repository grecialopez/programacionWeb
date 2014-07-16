<?php
	class StatusController{
		
		public $muestra_errores = false;
		function __construct(){
			
		}
		public function insertaStatus($datos){
				echo "<pre>datos";
			  	print_r($datos);
			  	echo"</pre>";
				$Status = new Status(); //instanciar el objeto
				$Status->set_status($datos['status']); //establecer el valor
				

				if(count($Status->errores)>0){
				print_r($Status->errores);	
				die();
			}
			$Status->inserta($Status->get_atributos());

}
}

?>