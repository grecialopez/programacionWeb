<?php
	class ArticuloController extends Articulo{
		
		public $muestra_errores = false;
		function __construct(){
			parent::Articulo();
		}
		public function insertaArticulo($datos,$archivos){
				echo "<pre>datos";
			  	print_r($datos);
			  	print_r($archivos);
			  	echo"</pre>";

				$this->set_Nombre($datos['nombre']); //establecer el valor
				$this->set_resumen($datos['resumen']); //establecer el valor
				$this->set_abstract($datos['abstract']);
				$this->set_introduccion($datos['introduccion']);
				$this->set_metodologia($datos['metodologia']);
				$this->set_contenido($datos['contenido']);
				$this->set_fecha_creacion($datos['fecha_creacion']);
				$this->set_archivo_pdf($archivos['archivo_pdf']['name']);		
				$this->set_conclusiones($datos['conclusiones']);
				$this->set_agradecimientos($datos['agradecimientos']);						
				$this->set_referencias($datos['referencias']);
				$this->set_id_status($datos['id_status']);
				

				if(count($this->errores)>0){
				$this->muestra_errores=true;
				
				}
				else{
					move_uploaded_file($archivos['archivo_pdf']['tmp_name'],
						"../archivos/".$archivos['archivo_pdf']['name']);

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