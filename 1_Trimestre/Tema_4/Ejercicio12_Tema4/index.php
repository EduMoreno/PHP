<!DOCTYPE html>
<!--
Escribe un programa que muestre los n primeros términos de la serie de Fibonacci. El primer término
de la serie de Fibonacci es 0, el segundo es 1 y el resto se calcula sumando los dos anteriores, por lo
que tendríamos que los términos son 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144... El número n se debe
introducir por teclado
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
          <h1>Fibonacci</h1>
      <?php
        $numero = $_GET['num'];
        
        if(!isset($numero)){
      
      ?>
      
          <form action="index.php" method="GET">
Introduce un numero 
            <input type="number" name="num"  min="2" >
            <input type="submit" value="Aceptar">
          </form> 
      <?php
        } else {
          $n1 = 0;
          $n2 = 1;
          $suma = 0;
          echo "0 1 ";
          for($i = 0; $i < $numero - 2; $i++){
            $suma = $n1 + $n2;
            $n1 = $n2;
            $n2 = $suma;
            echo $suma, " ";
          }
        }
      ?>
    </body>
</html>
