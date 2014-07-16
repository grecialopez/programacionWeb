<?php
	class RevistaController{
		
		public $muestra_errores = false;
		function __construct(){
			
		}
		public function insertaRevista($datos){
				echo "<pre>datos";
			  	print_r($datos);
			  	echo"</pre>";
				$Revista = new Revista(); //instanciar el objeto
				$Revista->set_Nombre($datos['nombre']); //establecer el valor
				$Revista->set_portada($datos['portada']);
				$Revista->set_fecha($datos['fecha']);
				$Revista->set_volumen($datos['volumen']);
				$Revista->set_titulo($datos['titulo']);
				$Revista->set_subtitulo($datos['subtitulo']);
				$Revista->set_numero($datos['numero']);
				$Revista->set_clave($datos['clave']);
				$Revista->set_directorio($datos['directorio']);
				$Revista->set_editorial($datos['editorial']);
				$Revista->set_id_status($datos['id_status']);

				if(count($Revista->errores)>0){
				print_r($Revista->errores);	
				die();
				}
	$Revista->inserta($Revista->get_atributos());

}
}

?>