<?php
	class EquipoController extends Equipo{
		
		public $muestra_errores = false;
		function __construct(){
		parent::Equipo();	
		}
		public function insertaEquipo($datos,$archivos){
				echo "<pre>datos";
			  	print_r($datos);
			  	print_r($archivos);
			  	echo"</pre>";
			  	//die();

			
				$this->set_nombre($datos['nombre']); //establecer el valor
				$this->set_escudo($archivos['escudo']['name']); //establecer el valor
				$this->set_idpais($datos['idpais']); //establecer el valor
				
				if(count($this->errores)>0){
				$this->muestra_errores=true;
			}
				else{
					move_uploaded_file($archivos['escudo']['tmp_name'],
						"../images/".$archivos['escudo']['name']);
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