<!DOCTYPE html>
<!--
Muestra los números múltiplos de 5 de 0 a 100 utilizando un bucle while .
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
      $contador=0;

        while ($contador <= 100){
           $resultado= $contador % 5;
            if($resultado == 0){
           echo $contador , "  ";
            }
             $contador++; 
        
        }
        ?>
    </body>
</html>
