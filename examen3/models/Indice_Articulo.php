<?php

class Indice_Articulo extends Modelo{
    public $nombre_tabla = 'indice_articulo';
    public $pk = 'id_indice_articulo';
    
    
    public $atributos = array(
        'id_articulo'=>array(),
        'id_indice'=>array(),
        
    );
    
    public $errores = array( );
    
    private $id_articulo;
    private $id_indice;
   
    
    function Indice_Articulo(){ // constructor y hace una llamada a MODELO, inicializar el objeto
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    
  public function get_id_articulo(){
        return $this->id_articulo;
    } 

public function set_id_articulo($valor){
     return $this->id_articulo = trim($valor);
        
    }

public function get_id_indice(){
        return $this->id_indice;
    } 

public function set_id_indice($valor){
     return $this->id_indice= trim($valor);
        
    }
    
}

?>