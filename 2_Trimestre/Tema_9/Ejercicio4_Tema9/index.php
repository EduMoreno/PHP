<?php
session_start();
include_once 'Zona.php';
$texto="";
if(!isset($_SESSION['principal'])){
  $_SESSION['principal'] = serialize(new Zona("Principal",1000,20));
  $_SESSION['compraVenta'] = serialize(new Zona("Compra-Venta",200,50));
  $_SESSION['vip'] = serialize(new Zona("vip",25,100));
} 
  $_SESSION['principal'] = unserialize($_SESSION['principal']);
  $_SESSION['compraVenta'] = unserialize($_SESSION['compraVenta']);
  $_SESSION['vip'] = unserialize($_SESSION['vip']);
//Venta entradas
if(isset($_POST['zona'])){
  $entradas = $_POST['numEntradas'];

  if($entradas <= $_SESSION[$_POST['zona']]->getAforo()){
    $_SESSION[$_POST['zona']]->ventaEntradas($entradas);
    $texto = "Se han vendido ".$entradas." entradas de la sala ".$_POST['zona'].".";
  } else {
    $texto = "No hay suficientes entradas para esa sala, gracias.";
  }
} 

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
     <script>
        function quitar(elem){
          elem.parentNode.removeChild(elem);
        }
    </script>
  </head>
  <body>
      <header><h1><strong>Expocoches</strong></h1></header>
    <section>
      <article>
        <?php
          echo $_SESSION['principal'];
          echo $_SESSION['compraVenta'];
          echo $_SESSION['vip'];
         
          $_SESSION['principal'] = serialize($_SESSION['principal']);
          $_SESSION['compraVenta'] = serialize($_SESSION['compraVenta']);
          $_SESSION['vip'] = serialize($_SESSION['vip']);
        ?>
      </article>
        <br>
      <article>
          <div>
             <?=$texto?>
          </div>
      </article>
        <br>
      <article>
        <form action="#" method="POST">
         <br>
            <label>Zona de Expocoches</label>
            <select name="zona">
              <option disabled selected>Elige Zona</option>
              <option value="principal">Sala Principal</option>
              <option value="compraVenta">Sala Compra-Venta</option>
              <option value="vip">Sala V.I.P</option>
            </select>
            <br>
            <br>
            <label>Número de Entradas</label>
            <input type="number" min=1 name="numEntradas">
            <input type="submit" value="Aceptar">
            
          </form>
      </article>      
    </section>
    <section></section>
  </body>
</html>