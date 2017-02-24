  <?php
          $moneda = $_GET['moneda'];
          $cantidad = $_GET['cantidad'];
          if($cantidad>0){
            if($moneda=='euros'){
              $total = $cantidad*166.38;
              $resultado[] = [
                  'moneda' => 'pesetas',
                  'cantidad'=> number_format($total, 2, '.', '')
              ];
              echo json_encode($resultado);
            } else if($moneda=='pesetas'){
              $total = $cantidad/166.38;
              $resultado[] = [
                  'moneda' => 'euros',
                  'cantidad'=> number_format($total, 2, '.', '')
              ];
              echo json_encode($resultado);
            } else{
                echo "Introduzca euros o pesetas";
            }
          } else {
              echo "La cantidad tiene que ser mayor a 0";
          }
          
 ?>
  