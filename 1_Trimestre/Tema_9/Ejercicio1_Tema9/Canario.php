<?php

include_once 'Ave.php';
include_once 'Animal.php';

class Canario extends Ave {
    
    private $comida;
    
    public function __construct($sx, $ed, $pa, $co) {
        parent::__construct($sx, $ed, $pa);
        $this->comida = $co;
    }
    
    public function imagen(){
        return "<img src=img/canario.jpeg width='100px' heigth='100px'>";
    }
    
    public function __toString() {
    return "<b>Canario</b><br>" . $this->imagen() . "<br>Sexo: " . $this->getSexo() . "<br>Edad: " . $this->getEdad() . "<br>Número de patas: " . $this->getPatas() . "<br>Comida: $this->comida". "<hr>";
    }
    
}
