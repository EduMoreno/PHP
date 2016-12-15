<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    <?php
      include_once 'Vehiculo.php';
      include_once 'Bicicleta.php';
      include_once 'Coche.php';
      
      $biciUno = new Bicicleta("Bmx", "-", 32);
      $biciDos = new Bicicleta("Htc", "-",5);
      
      $cocheUno = new Coche("Mercedes","Benz",190);
      $cocheDos = new Coche("Peugeot","206",100);

      $biciUno->anda(30);
      $biciDos->anda(40);
      $biciUno->anda(220);
      $biciDos->anda(60);
      
      $cocheUno->anda(200);
      $cocheDos->anda(150);
      $cocheUno->anda(300);
      $cocheDos->anda(500);
      
      echo $cocheUno . "<br><br>";
      echo $cocheDos . "<br><br>";
      echo $biciUno . "<br><br>";
      echo $biciDos . "<br><br>";
     
      echo "*************************BICICLETAS*****************************<br>";
      echo "La biciUno ha recorrido " . $biciUno->getKilometraje() . "Km<br>";
      echo $biciUno->caballito() . " BiciUno" . "<br>";
      echo $biciUno->montaB() . " BiciUno" . "<br><br>";
      
      echo "La biciDos ha recorrido " . $biciDos->getKilometraje() . "Km<br>";
      echo $biciDos->caballito() . " BiciDos" . "<br>";
      echo $biciDos->montaB() . " BiciDos" . "<br><br>";
      
      echo "****************************COCHES******************************<br>";
      echo "El cocheUno ha recorrido " . $cocheUno->getKilometraje() . "Km<br>";
      echo $cocheUno->quema() . " cocheUno" . "<br>";
      echo $cocheUno->montaC() . " cocheUno" . "<br><br>";
      
      echo "El cocheDos ha recorrido " . $cocheDos->getKilometraje() . "Km<br>";
      echo $cocheDos->quema() . " cocheDos" . "<br>";
      echo $cocheDos->montaC() . " cocheDos" . "<br><br>";
     
      echo "**************************KILOMETRAJE***************************<br>";
      echo "El kilometraje total ha sido de " . Vehiculo::getkmTotales() . "Km<br><br>";
      
      echo "****************************CONTADOR****************************<br>";
      echo "Número de coches y bicicletas: ";
      echo Vehiculo::getnumVehiculos();
      
    ?>
  </body>
</html>
