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
        
        $num= 2000;
        $contador= 0;
       
       while($num!=0) {
        $num= $num /10;
        $contador++;
       }
       echo $contador;
        
        ?>
    </body>
</html>
