<?php

class Er {
    	//1. verificar email
	public function valida_email($valor){
		$exp_reg = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	//2. verificar si un password es seguro
	public function valida_password($password){
		if (preg_match("/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/", $password)) 
			echo "Su password es seguro."; 
		else echo "Su password no es seguro.";

	}
	//3. verificar nombre
	public function valida_nombre($nombre){
		return preg_match('#^ [a-z]  [\da-z_] {6,22} [a-z\d] \$#i', $nombre);

	}
	//4.- verificar fecha
	public function validar_Fecha($fecha){
			    return preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $fecha);
			}

//5.- validar una URL

		public function validaryPonerEnlaceaURL($url)
				{
    $host = "( [a-z\d]  [-a-z\d] * [a-z\d] \.)+ [a-z]  [-a-z\d] * [a-z] ";
    $port = "(:\d{1,})?";
    $path = "(\/ [^?<>\#\"\s] +)?";
    $query = "(\? [^<>\#\"\s] +)?";
 
    $reg = "#((ht|f)tps?:\/\/{$host}{$port}{$path}{$query})#i";
    return preg_replace($reg, "<a href='$1'>$1</a>", $url);
			}


		//6.- detectar insultos
		public	function detectarInsultos($string){
				 
		function prep_regexp_array(&$item){
		  $item = "#$item#i";
				    }
				 
		function stars($matches){
			return substr($matches [0] , 0, 1).str_repeat("*", strlen($matches [0] )-1);
				   }    
				 
			$insultos= array("insulto1", "insulto2");
			array_walk($insultos, "prep_regexp_array");
			return preg_replace_callback($insultos, "***", $string);
				}

			
	
		//8.- validar un entero
		public function validar_entero($entero){
			$exp_reg = '^(?:\+|-)?\d+$'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 

		}
		//9.- validar fecha

		public function valida_fecha($fecha){
			$exp_reg = '^\d{1,2}\/\d{1,2}\/\d{2,4}$'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 

		}

	//10.- validar hora
			public function validar_hora($hora){
			$exp_reg = '^(0[1-9]|1\d|2[0-3]):([0-5]\d):([0-5]\d)$'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 

		}

	//11.- validar tarjeta de credito

		public function validar_tarjeta_credito($numero){
			$exp_reg = '^((67\d{2})|(4\d{3})|(5[1-5]\d{2})|(6011))(-?\s?\d{4}){3}|(3[4,7])\ d{2}-?\s?\d{6}-?\s?\d{5}$'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 

		}

	//12.- validar numero telefono

public function validar_telefono($numero){
			$exp_reg = '^([1-9]{2}|[0-9][1-9]|[1-9][0-9])[0-9]{3}$'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 

		}




}

?>    