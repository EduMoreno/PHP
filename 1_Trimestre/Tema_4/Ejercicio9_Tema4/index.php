<!DOCTYPE html>
<!--
Realiza un programa que nos diga cuántos dígitos tiene un número introducido por teclado.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
            
        <?php
        
      $num = $_GET['num'];
      $contador = 0;
      do{
        $num = floor($num/10);
        $contador++;
      }while($num != 0);
      
       echo "Tiene ", $contador , " digitos";
        
        ?>
    </body>
</html>
