<?php $ciudades = $_GET["formulario"];?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>El tiempo en <?=$ciudades?></title>
  </head>
  <body>
    <h2>El tiempo en <?=$ciudades?></h2>
    <?php
      $datos = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=$ciudades,Spain&units=metric&appid=426970061b69a5ae6fdca510cb5b4736");
      echo "<h3>Datos en bruto (en formato JSON): </h3>$datos<hr>";
      $tiempo = json_decode($datos);
      echo "<h3>Datos en un objeto: </h3>";
      print_r($tiempo);
      echo "<hr>";
      echo "<h3>Datos sueltos: </h3>";
      echo "Temperatura: ".$tiempo->{"main"}->{"temp"}."ºC<br>";
      echo "Humedad: ".$tiempo->{"main"}->{"humidity"}."%<br>";
      echo "Presión: ".$tiempo->{"main"}->{"pressure"}."mb<br>";
    ?>
  </body>
</html>
