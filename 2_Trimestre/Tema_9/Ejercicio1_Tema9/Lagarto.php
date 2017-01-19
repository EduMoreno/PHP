<?php

include_once 'Animal.php';

class Lagarto extends Animal{
    private $comida;
    
    public function __construct($sx, $ed, $pa, $co) {
        parent::__construct($sx, $ed, $pa);
        $this->comida = $co;
    }
    
    public function cola(){
        return "si tengo miedo, pierdo mi cola.";
    }

    public function imagen(){
        return "<img src=img/lagarto.jpeg width='100px' heigth='100px'>>";
    }
    
    public function __toString() {
        return "<b>Lagarto</b><br>" . $this->imagen() . "<br>Sexo: " . $this->getSexo() . "<br>Edad: " . $this->getEdad() . "<br>Número de patas: " . $this->getPatas() . "<br>Comida: $this->comida". "<hr>";
    }
}