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
            $puntuacion = 0;
              
             foreach($_GET as $respuesta) {
                $puntuacion += $respuesta;
              }
              
              if($puntuacion <= 10){
                echo "¡Enhorabuena! tu pareja parece ser totalmente fiel.";
              }
              
               if ( ($puntuacion > 11 ) && ($puntuacion <= 22) ) {
                echo "Quizás exista el peligro de otra persona en su vida o en su mente,";
                echo "aunque seguramente será algo sin importancia. No bajes la guardia.";
              }
              if ( $puntuacion >= 22 ) {
                echo "Tu pareja tiene todos los ingredientes para estar viviendo un ";
                echo "romance con otra persona. Te aconsejamos que indagues un poco más ";
                echo "y averigües qué es lo que está pasando por su cabeza.";
              }
        ?>
    </body>
</html>
