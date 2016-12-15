<?php

  class Bicicleta extends Vehiculo {
  
    private $pinones;
      
    public function __construct($ma, $mo, $pi) {
     parent::__construct($ma, $mo);
     $this->pinones=$pi;
    }
    
    public function caballito() {
      return " Haz el caballito con la";
    }
    
    public function montaB() {
      return " Anda con la";
    }
    
    public function __toString() {
     //return $this->getMarca();
     //$this->pinones;
    return parent::__toString()."
         Número de piñones: $this->pinones<hr>";
    }
  
}
