<?php

include_once 'Mamifero.php';
include_once 'Animal.php';

class Gato extends Mamifero{
    private $comida;
    
    public function __construct($sx, $ed, $pa, $co) {
        parent::__construct($sx, $ed, $pa);
        $this->comida = $co;
    }
    
    public function maullar(){
        return "maullo porque soy un gato";
    }

    public function imagen(){
        return "<img src=img/gato.png width='100px' heigth='100px'>";
    }
    
    public function __toString() {
        return "<b>Gato</b><br>" . $this->imagen() . "<br>Sexo: " . $this->getSexo() . "<br>Edad: " . $this->getEdad() . "<br>Número de patas: " . $this->getPatas() . "<br>Comida: $this->comida". "<hr>";
    }
}
