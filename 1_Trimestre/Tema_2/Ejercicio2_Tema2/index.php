<!DOCTYPE html>
<!--
Realiza un conversor de pesetas a euros. La cantidad en pesetas que se quiere convertir se deberá
introducir por teclado.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $pesetas = $_GET['pesetas'];
        $resultado= $pesetas /166.386;
        echo $pesetas, " pts"  , " / " , 166.386, " = ",  $resultado , " €"; 
        ?>

    </body>
</html>
