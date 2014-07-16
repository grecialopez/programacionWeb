<?php
	class ArticuloController{
		
		public $muestra_errores = false;
		function __construct(){
			
		}
		public function insertaArticulo($datos){
				echo "<pre>datos";
			  	print_r($datos);
			  	echo"</pre>";
				$articulo = new Articulo(); //instanciar el objeto
				$articulo->set_Nombre($datos['nombre']); //establecer el valor
				$articulo->set_resumen($datos['resumen']); //establecer el valor
				$articulo->set_abstract($datos['abstract']);
				$articulo->set_introduccion($datos['introduccion']);
				$articulo->set_metodologia($datos['metodologia']);
				$articulo->set_contenido($datos['contenido']);
				$articulo->set_fecha_creacion($datos['fecha_creacion']);
				$articulo->set_archivo_pdf($datos['archivo_pdf']);				
				$articulo->set_conclusiones($datos['conclusiones']);
				$articulo->set_agradecimientos($datos['agradecimientos']);
				$articulo->set_referencias($datos['referencias']);
				$articulo->set_id_status($datos['id_status']);
				

				if(count($articulo->errores)>0){
				print_r($articulo->errores);	
				die();
				}
				$Articulo->inserta($Articulo->get_atributos());
}
}

?>