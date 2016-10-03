<!DOCTYPE html>
<!--
Escribe un programa que nos diga el horóscopo a partir del día y el mes de nacimiento.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $dia = $_GET['dia'];
        $mes = $_GET['mes'];
         
        $signo = "";
              
              switch ($mes){
                case "enero":
                  if ($dia < 20) {
                    $signo = "Capricornio";
                  } else {
                    $signo = "Acuario";
                  }
                  break;
                case "febrero":
                  if ($dia < 18) {
                    $signo = "Acuario";
                  } else {
                    $signo = "Piscis";
                  }
                  break;  
                case "marzo":
                  if ($dia < 20) {
                    $signo = "Piscis";
                  } else {
                    $signo = "Aries";
                  }
                  break; 
                case "abril":
                  if ($dia < 20) {
                    $signo = "Aries";
                  } else {
                    $signo = "Tauro";
                  }
                  break; 
                case "mayo":
                  if ($dia < 21) {
                    $signo = "Tauro";
                  } else {
                    $signo = "Geminis";
                  }
                  break; 
                case "junio":
                  if ($dia < 21) {
                    $signo = "Geminis";
                  } else {
                    $signo = "Cancer";
                  }
                  break; 
                case "julio":
                  if ($dia < 23) {
                    $signo = "Cancer";
                  } else {
                    $signo = "Leo";
                  }
                  break; 
                case "agosto":
                  if ($dia < 23) {
                    $signo = "Leo";
                  } else {
                    $signo = "Virgo";
                  }
                  break; 
                case "septiembre":
                  if ($dia < 23) {
                    $signo = "Virgo";
                  } else {
                    $signo = "Libra";
                  }
                  break; 
                case "octubre":
                  if ($dia < 23) {
                    $signo = "Libra";
                  } else {
                    $signo = "Escorpio";
                  }
                  break; 
                case "noviembre":
                  if ($dia < 22) {
                    $signo = "Escorpio";
                  } else {
                    $signo = "Sagitario";
                  }
                  break;
                case "diciembre":
                  if ($dia < 22) {
                    $signo = "Sagitario";
                  } else {
                    $signo = "Capricornio";
                  }
                  break; 
                  default:
                }
                echo "El horoscopo correspondiente es ", $signo;
              
        ?>
    </body>
</html>
