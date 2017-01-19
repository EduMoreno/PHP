<?php

class Vehiculo {

    // atributo de clase para definirlo usamos static
    private static $kmTotales = 0;

    private $marca;
    private $modelo;
    private $kilometraje;
    private $NumCoches;
    private static $numVehiculos;
  // private significa  que desde las otras clases no se pueden ver
  // self es para cuando se refiere solo a la clase padre  
  
    public function getnumVehiculos() {
        return self::$numVehiculos;
    }

    public function __construct($ma, $mo) {
      $this->marca = $ma;
      $this->modelo = $mo;
      $this->kilometraje = 0;
      self::$numVehiculos++;
    }

    public function getKilometraje() {
      return $this->kilometraje;
    }
    
    public function anda($km) {
      $this->kilometraje += $km;
      self::$kmTotales += $km;
    }

    public static function getkmTotales() {
      return self::$kmTotales;
    }
    

    public function __toString() {
      return "<hr><b>Marca: $this->marca</b><br>
          Modelo: $this->modelo<br>
          Quilometraje: $this->kilometraje<br>";
    }
    
    function getMarca() {
        return $this->marca;
    }

    function getModelo() {
        return $this->modelo;
    }
    
    
  }