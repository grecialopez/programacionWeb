<?php
	class RevistaController extends Revista{
		
		public $muestra_errores = false;
		function __construct(){
			parent::Revista();
			
		}
		/*<?php
 echo  '<div class ="row">
          <div class ="col-md-12">';
            
             if($RevistaC->muestra_errores)
             {
            
            echo '<div class="alert alert-danger" role="alert">';
            
            
                foreach ($RevistaC->errores as $value) 
              {
                echo"<p>error:</p>";
              }
            
            echo '</div>';
            
        
            }
?>*/
		public function insertaRevista($datos,$archivos){
				
				
				$this->set_Nombre($datos['nombre']); //establecer el valor
				$this->set_portada($archivos['portada']['name']);
				$this->set_fecha($datos['fecha']);
				$this->set_volumen($datos['volumen']);
				$this->set_titulo($datos['titulo']);
				$this->set_subtitulo($datos['subtitulo']);
				$this->set_numero($datos['numero']);
				$this->set_clave($datos['clave']);
				$this->set_directorio($datos['directorio']);
				$this->set_editorial($datos['editorial']);
				$this->set_id_status($datos['id_status']);

				if(count($this->errores)>0){
				//print_r(this->errores);	
					$this->muestra_errores=true;
				}else{

					move_uploaded_file($archivos['portada']['tmp_name'],
						"../images/".$archivos['portada']['name']);
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