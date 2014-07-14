<?php

class Integrante extends Modelo{
    public $nombre_tabla = 'Integrante';
    public $pk = 'idintegrante';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'apellido'=>array(),
        'peso'=>array(),
        'estatura'=>array(),
        'foto'=>array(),
        'Edad'=>array(),
        'idequipo'=>array(),



    );
    
    public $errores = array( );
    
    private $nombre;
    private $apellido;
    private $peso;
    private $estatura;
    private $foto;
    private $Edad;
    
    function Integrante(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    
    public function get_nombre(){
        return $this->nombre;
    } 

    public function set_nombre($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este nombre (".$valor.") no es valido";
        }

        $rs = $this->consulta_sql("select * from integrante where nombre = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->errores[] = "Este nombre (".$valor.") ya esta registrado"; 
        }else{
            $this->nombre = trim($valor);
        }
    }

    public function get_apellido(){
        return $this->apellido;

    }
     public function set_apellido($valor){

        $er = new Er();
        
        if ( !$er->valida_apellido($valor) ){
            $this->errores[] = "Este nombre (".$valor.") no es valido";
        }

        $rs = $this->consulta_sql("select * from integrante where apellido = '$valor'");
        $rows = $rs->GetArray();
        
       }

    public function get_peso(){
        return $this->baja;
    }
    
    public function set_peso($valor){
        $this->peso = trim( md5($valor) );
    }
      public function get_estatura(){
        return $this->baja;
    }
    
    public function set_estatura($valor){
        $this->estatura = trim( md5($valor) );
    }

  public function get_foto(){
        return $this->baja;
    }
    
    public function set_foto($valor){
        $this->foto = trim( md5($valor) );
    }

      public function get_Edad(){
        return $this->baja;
    }
    
    public function set_Edad($valor){
        $this->Edad = trim( md5($valor) );
    }
  public function get_idequipo(){
        return $this->baja;
    }
    
    public function set_idequipo($valor){
        $this->idequipo= trim( md5($valor) );
    }

    
    
    
}

?>
