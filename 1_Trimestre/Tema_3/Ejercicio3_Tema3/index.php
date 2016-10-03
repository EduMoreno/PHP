<!DOCTYPE html>
<!--
Escribe un programa en que dado un número del 1 a 7 escriba el correspondiente nombre del día
de la semana
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $dia= $_GET["dia"];
    switch($dia) {
    case 1: // Bloque 1
     echo "Lunes";
    break;
    case 2: // Bloque 2
        echo "Martes";
    break;
    case 3: // Bloque 2
        echo "Miercoles";
    break;
    case 4: // Bloque 2
        echo "Jueves";
    break;
    case 5: // Bloque 2
        echo "Viernes";
    break;
    case 6: // Bloque 2
        echo "Sabado";
    break;
    case 7: // Bloque 2
        echo "Domingo";
    break;
    default: // Bloque 3
     echo "Por favor introduzca un numero comprendido desde el 1 al 7";

}
        ?>
    </body>
</html>
