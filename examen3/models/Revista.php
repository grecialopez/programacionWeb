<?php

class Revista extends Modelo{
    public $nombre_tabla = 'revista';
    public $pk = 'id_revista';
    
    
    public $atributos = array(
       'nombre'=>array(),
       'portada'=>array(),
       'fecha'=>array(),
       'volumen'=>array(),
       'titulo'=>array(),
       'subtitulo'=>array(),
       'numero'=>array(),
       'clave'=>array(),
       'directorio'=>array(),
       'editorial'=>array(),
       'id_status'=>array(),           
    );
    
    public $errores = array( );
    
    private $nombre;
    private $portada;
    private $fecha;
    private $volumen;
    private $titulo;
    private $subtitulo;
    private $numero;
    private $clave;
    private $directorio;
    private $editorial;
    private $id_status;
       
    
    function Revista(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    
    public function get_Nombre(){
        return $this->nombre;
    } 

    public function set_Nombre($valor){
       $er = new Er();
       
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este nombre (".$valor.") no es valido";
        }
         $this->nombre = trim($valor);
    }

    public function get_portada(){
        return $this->portada;
        
    } 

public function set_portada($valor){
     return $this->portada = trim($valor['name']);
       //TAREA:VALIDAR el nombre de la imagen, tipo y tamaño 
    }
    
   public function get_fecha(){
        return $this->fecha;
    } 

    public function set_fecha($valor){
      
            $this->fecha = trim($valor);        
    } 
public function get_volumen(){
        return $this->volumen;
    } 

    public function set_volumen($valor){
      
            $this->volumen = trim($valor);        
    } 
    public function get_titulo(){
        return $this->titulo;
    } 

    public function set_titulo($valor){
      
            $this->titulo= trim($valor);        
    } 
    public function get_subtitulo(){
        return $this->subtitulo;
    } 

    public function set_subtitulo($valor){
      
            $this->subtitulo= trim($valor);        
    } 

    public function get_numero(){
        return $this->numero;
    } 

    public function set_numero($valor){
      
            $this->numero= trim($valor);        
    }

    public function get_clave(){
        return $this->clave;
    } 

    public function set_clave($valor){
      
            $this->clave= trim($valor);        
    } 

    public function get_directorio(){
        return $this->directorio;
    } 

    public function set_directorio($valor){
      
            $this->directorio= trim($valor);        
    } 

    public function get_editorial(){
        return $this->editorial;
    } 

    public function set_editorial($valor){
      
            $this->editorial= trim($valor);        
    } 
    public function get_id_status(){
        return $this->id_status;
    } 

    public function set_id_status($valor){
      
            $this->id_status= trim($valor);        
    } 

}

?>
