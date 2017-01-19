<?php

include_once 'Mamifero.php';
include_once 'Animal.php';

class Perro extends Mamifero{
    private $comida;
    
    public function __construct($sx, $ed, $pa, $co) {
        parent::__construct($sx, $ed, $pa);
        $this->comida = $co;
    }
    
    public function ladrar(){
        return "ladro porque soy un perro";
    }

    public function imagen(){
        return "<img src=img/perro.jpg width='100px' heigth='100px'>";
    }
    
    public function __toString() {
        return "<b>Perro</b><br>" . $this->imagen() . "<br>Sexo: " . $this->getSexo() . "<br>Edad: " . $this->getEdad() . "<br>Número de patas: " . $this->getPatas() . "<br>Comida: $this->comida". "<hr>";
    }
}
