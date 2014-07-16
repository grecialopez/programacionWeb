<?php
	class IndiceController{
		
		public $muestra_errores = false;
		function __construct(){
			
		}
		public function insertaIndice($datos){
				echo "<pre>datos";
			  	print_r($datos);
			  	echo"</pre>";
				$indice= new Indice(); //instanciar el objeto
				$indice->set_titulo($datos['titulo']); //establecer el valor
				$indice->set_numero($datos['numero']); //establecer el valor
				$indice->set_id_revista($datos['id_revista']); //establecer el valor

				if(count($indice->errores)>0){
				print_r($indice->errores);
		}
				
		}

		

}


?>