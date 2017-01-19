<?php

class Animal {
    
    private $sexo;
    private $edad;
    private $patas;
    
    public function __construct($sx, $ed, $pa) {
      $this->sexo = $sx;
      $this->edad = $ed;
      $this->patas = $pa;
    }
    
    function getPatas() {
        return $this->patas;
    }
    
    function getSexo() {
        return $this->sexo;
    }

    function getEdad() {
        return $this->edad;
    }
   
}
