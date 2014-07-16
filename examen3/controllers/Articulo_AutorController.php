<?php
	class Articulo_AutorController{
		
		public $muestra_errores = false;
		function __construct(){
			
		}
		public function insertaArticulo_Autor($datos){
				echo "<pre>datos";
			  	print_r($datos);
			  	echo"</pre>";
				$Articulo_Autor= new Articulo_Autor(); //instanciar el objeto
				$Articulo_Autor->set_id_articulo($datos['id_articulo']); //establecer el valor
				$Articulo_Autor->set_id_autor($datos['id_autor']); //establecer el valor
				
				if(count($Articulo_Autor->errores)>0){
				print_r($Articulo_Autor->errores);
		}
				
		}

		

}


?>