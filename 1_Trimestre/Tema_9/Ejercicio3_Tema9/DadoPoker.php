<?php
class DadoPoker {
   
    //Atributos de dado
    private $carasDado = ["AS","K","Q","J","7","8"];
    private $figura;
    
    //Atributos de clase 
    private static $tiradasTotales=0;
    public function __construct() {
    }
  
    function nombreFigura() {
        return $this->figura;
    }
    
    static function setTiradasTotales($tiradasTotales) {
        self::$tiradasTotales = $tiradasTotales;
    }
        public function tira() {
        self::$tiradasTotales++;
        $this->figura = $this->carasDado[rand(0, 5)];
    }
 
    public static function getTiradasTotales() {
        return self::$tiradasTotales;
    }
   
}