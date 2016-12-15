<?php
  class Zona {
    
 
    public function __construct($nombre,$aforo,$precio) {
      $this->nombre = $nombre;
      $this->aforo = $aforo;
      $this->precio = $precio;
    }
   
    private $nombre;
    private $aforo;
    private $precio;

    function getNombre() {
      return $this->nombre;
    }
    function getAforo() {
      return $this->aforo;
    }
    function getPrecio() {
      return $this->precio;
    }
    function setNombre($nombre) {
      $this->nombre = $nombre;
    }
    function setAforo($aforo) {
      $this->aforo = $aforo;
    }
    function setPrecio($precio) {
      $this->precio = $precio;
    }
    function ventaEntradas($entradasCompradas){
      $this->setAforo($this->getAforo() - $entradasCompradas);
    }
    
    function __toString() {
      return "Quedan ".$this->aforo." entradas en la Sala ".$this->nombre."<br>";
    }
  }