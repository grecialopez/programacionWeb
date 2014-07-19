<?php
	class PaisController extends Pais{
		
		public $muestra_errores = false;
		function __construct(){
			parent::Pais();
			
		}
		public function insertaPais($datos,$archivos){
				echo "<pre>datos";
			  	print_r($datos);
			  	print_r($archivos);
			  	echo"</pre>";
			  

				
				$this->set_nombre($datos['nombre']); //establecer el valor
				$this->set_bandera($archivos['bandera']['name']); //establecer el valor
				$this->set_idcontinente($datos['idcontinente']); //establecer el valor

				if(count($this->errores)>0){
					$this->muestra_errores=true;
								}
				else{
					move_uploaded_file($archivos['bandera']['tmp_name'],
						"../images/".$archivos['bandera']['name']);
				$this->inserta($this->get_atributos());
			}			
		}

			public function alertas()
					{
						
							if($this->muestra_errores){
							
							echo '<div class="alert alert-danger">';
		           
									foreach($this->errores as $value){
										echo "<p>$value</p>";
									}
								
							echo "</div>";		                   	
							}
						  
			}

		

}


?>