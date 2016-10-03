<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if(isset($_GET['a'])){
              $a = $_GET['a'];
              $b = $_GET['b'];
              $c = $_GET['c'];
              
              if (($a == 0) && ($b == 0) && ($c == 0)){
               echo "La ecuacion tiene soluciones infinitas";
              }
              if (($a == 0) && ($b == 0) && ($c != 0)){
                echo "La ecuación no tiene solución.";
              }
              if (($a != 0) && ($b != 0) && ($c == 0)) {
                echo "x<sup>1</sup> = 0 </br>";
                echo "x<sup>2</sup> = ", (-$b / $a), "</br>";
              }
              if (($a == 0) && ($b != 0) && ($c != 0)) {
                echo "x<sup>1</sup> = x2 = ", (-$c / $b), "</br>";
              }
              if (($a != 0) && ($b != 0) && ($c != 0)) {	
                $discriminante = $b*$b - (4 * $a * $c);
                if ($discriminante < 0) {
                    echo "La ecuación no tiene soluciones reales";
                } else {
                  echo "x<sup>1</sup> = ", (-$b + sqrt($discriminante))/(2 * $a ), "</br>";
                  echo "x<sup>2</sup> = ", (-$b - sqrt($discriminante))/(2 * $a ), "</br>";
                }
              }
            }       
            
            ?>
    </body>
</html>
