<?php
        
          $num = $_GET['cantidad'];
          $palos = ['Espadas', 'Basto', 'Oro', 'Copa'];
          $numeros = ['As','2','3','4','5','6','7','8','9','Sota','Caballo','Rey'];
          $mazo = [];
          if(($num<=40)&&($num>0)){
            while($num>0){
              $paloSeleccionado = $palos[rand(0,3)];
              $numeroSeleccionado = $numeros[rand(0,11)];
              $carta = [
                'numero' => $numeroSeleccionado,
                'palo' => $paloSeleccionado ];
              
              if(!in_array($carta, $mazo)){
                  $mazo[] = $carta;
                  $num--;
              }
            }
            echo json_encode($mazo);
          } else {
            echo "Elija otra cantidad que no sea menor a 1 o mayor a 40.";
          }
  ?>