<?php

class Articulo_Autor extends Modelo{
    public $nombre_tabla = 'articulo_autor';
    public $pk = 'id_artidulo_autor';
    
    
    public $atributos = array(
        'id_articulo'=>array(),
        'id_autor'=>array(),
        
    );
    
    public $errores = array( );
    
    private $id_articulo;
    private $id_autor;
   
    
    function Articulo_Autor(){ // constructor y hace una llamada a MODELO, inicializar el objeto
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

public function get_id_autor(){
        return $this->id_autor;
    } 

public function set_id_autor($valor){
     return $this->id_autor= trim($valor);
        
    }
    
}

?>