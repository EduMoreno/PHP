<!DOCTYPE html>
<!--
Realiza un conversor de pesetas a euros. La cantidad en pesetas que se quiere convertir deberá estar
almacenada en una variable.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $pesetas = 1000;
        $resultado= $pesetas /166.386;
        echo $pesetas, " pts"  , " / " , 166.386, " = ",  $resultado , " €"; 
        ?>
    </body>
</html>
