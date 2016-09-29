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
        $base = $_GET['base'];
        $altura= $_GET['altura'];
        $resultado= $base * $altura;
        
        echo "El área del rectangulo es " , $resultado;
        ?>
    </body>
</html>
