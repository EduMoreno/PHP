<!DOCTYPE html>
<!--
Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle do-while .
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
    $contador= 320;
        
      do{  
        
          echo $contador , "  "; 
          $contador = $contador - 20;
          
        }while($contador >= 160);
        ?>
    </body>
</html>
