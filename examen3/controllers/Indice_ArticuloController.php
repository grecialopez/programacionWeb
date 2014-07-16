<?php
	class Indice_ArticuloController{
		
		public $muestra_errores = false;
		function __construct(){
			
		}
		public function insertaIndice_Articulo($datos){
				echo "<pre>datos";
			  	print_r($datos);
			  	echo"</pre>";
				$Indice_Articulo= new Indice_Articulo(); //instanciar el objeto
				$Indice_Articulo->set_id_aarticulo($datos['id_articulo']); //establecer el valor
				$Indice_Articulo->set_id_indice($datos['id_indice']); //establecer el valor
				
				if(count($Indice_Articulo->errores)>0){
				print_r($Indice_Articulo->errores);
		}
				
		}

		

}


?>