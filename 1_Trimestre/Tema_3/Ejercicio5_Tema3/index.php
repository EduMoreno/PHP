<!DOCTYPE html>
<!--
Realiza un programa que resuelva una ecuación de primer grado (del tipo ax + b = 0).
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
      
          $a = $_GET['a'];
          $b = $_GET['b'];
      
          if ( $a == 0) {
                echo "No tiene solucion.";
              } else {
                echo "x = ", -($b/$a);
              }
            
          ?>        
    </body>
</html>
