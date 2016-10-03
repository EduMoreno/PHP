<!DOCTYPE html>
<!--
Escribe un programa que diga si un número introducido por teclado es o no primo. Un número
primo es aquel que sólo es divisible entre él mismo y la unidad
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
 $numero = $_GET['num'];      
 $esPrimo = true;
          
          for ($x = 2; $x < $numero; $x++) {
              if(($numero % $x) == 0){
               $esPrimo = false;
              } 
          }
         
          if (($numero == 0) || ($numero == 1)) {
            $esPrimo = false;
          }
          
          if($esPrimo){
            echo "El numero ", $numero, " es primo." ;
          } else {
            echo "El numero ", $numero, "  no es primo." ;
          }
        
 ?>
    </body>
</html>
