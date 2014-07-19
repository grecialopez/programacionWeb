<?php
	class IntegranteController{
		
		public $muestra_errores = false;
		function __construct(){
			
		}
		public function insertaIntegrante($datos,$archivos){
				echo "<pre>datos";
			  	print_r($datos);
			  	print_r($archivos);
			  	echo"</pre>";
			  	//die();


				$integrante = new Integrante(); //instanciar el objeto
				$integrante->set_nombre($datos['nombre']); //establecer el valor				
				$integrante->set_apellido($datos['apellido']);
				$integrante->set_peso($datos['peso']);
				$integrante->set_estatura($datos['estatura']);
				$integrante->set_foto($archivos['foto']['name']);
				$integrante->set_Edad($datos['Edad']);
				$integrante->set_idequipo($datos['idequipo']);
				
				if(count($integrante->errores)>0){
				print_r($integrante->errores);	
				die();
				}
				else{
					move_uploaded_file($archivos['foto']['tmp_name'],
						"../images/".$archivos['foto']['name']);
				$integrante->inserta($integrante->get_atributos());
			}
}

}

?>