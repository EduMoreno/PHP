<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    <?php
      include_once 'Animal.php';
      include_once 'Ave.php';
      include_once 'Canario.php';
      include_once 'Mamifero.php';
      include_once 'Perro.php';
      include_once 'Gato.php';
      include_once 'Pinguino.php';
      include_once 'Lagarto.php';
      
  
      $kiwi = new Canario ("Hembra", 3, 2,"Alpiste");
      $zoe = new Perro ("Hembra", 2, 4, "Pienso");
      $tigre = new Gato ("Macho",5,4,"Sardinas");
      $pingu = new Pinguino("Macho",8,2,"Pescado");
      $cata = new Lagarto("Hembra", 2, 4, "Insectos");
      
      
      echo $kiwi. "<br>";
      echo $zoe . "<br>";
      echo $tigre . "<br>";
      echo $pingu . "<br>";
      echo $cata;
      
      
      echo "Soy kiwi y " . $kiwi -> limpioPlumas() . "<br>";
      echo "Soy Zoe y " . $zoe-> ladrar() . " Y " . $zoe->Criar() . "<br>";
      echo "Soy Tigre y " . $tigre->maullar() . "<br>";
      echo "Soy Pingu y " . $pingu->volar() . "<br>";
      echo "Soy Cata y " . $cata->cola() . "<br>";
      
      
    ?>
  </body>
</html>
