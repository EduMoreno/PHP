<!DOCTYPE html>
<!--
Escribe un programa que calcule la media de un conjunto de números positivos introducidos por
teclado. A priori, el programa no sabe cuántos números se introducirán. El usuario indicará que ha
terminado de introducir los datos cuando meta un número negativo.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
      <p>Para parar de meter numeros introduce un numero negativo.</p>
      <?php
          $numero = $_GET['numero'];
          $suma = $_GET['suma'];
          $contador = $_GET['contador'];
        
        if (!isset($numero) || ($numero > 0)) {
          $suma = $suma + $numero;
          $contador++;
      ?>
          <form action="index.php" method="GET">
            <input type="number" name="numero" autofocus>
            <input type="hidden" name="suma" value="<?php echo $suma ; ?>">
            <input type="hidden" name="contador" value="<?php echo $contador ; ?>">
            <input type="submit" value="Aceptar">
          </form>  
      <?php
        } else {
               echo "La media de los números es ",  $suma / ($contador - 1);
          }
      ?>
    </body>
</html>
