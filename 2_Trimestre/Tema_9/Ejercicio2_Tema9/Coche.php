<?php

  class Coche extends Vehiculo {
  
    private $caballos;
      
    public function __construct($ma, $mo, $ca) {
     parent::__construct($ma, $mo);
     $this->caballos=$ca;
    }
    
    public function quema() {
      return "Quema rueda con el";
    }
    
    public function montaC() {
      return " Anda con el";
    }
    
    public function __toString() {
    return parent::__toString()."Número de caballos: $this->caballos<hr>";
    }
  
}
