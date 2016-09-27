<!DOCTYPE html>
<!--
Escribe un programa que muestre por pantalla 10 palabras en inglés junto a su correspondiente
traducción al castellano. Las palabras deben estar distribuidas en dos columnas. Utiliza la etiqueta
<table> de HTML.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            table, td, tr {
              border: 2px black solid;  
              border-collapse: collapse;   
            }
            </style>
    </head>
    <body>
        <?php
     echo ("<table>
        <tr>
        <td>Hello</td>
        <td>Hola </td>
        </tr>
        <tr>
        <td>Dog</td>
        <td>Perro </td>
        </tr>
          <tr>
        <td>Cat</td>
        <td>Gato </td>
        </tr>
          <tr>
        <td>Car</td>
        <td>Coche </td>
        </tr>
          <tr>
        <td>Green</td>
        <td>Verde </td>
        </tr>
          <tr>
        <td>Red</td>
        <td>Rojo </td>
        </tr>
          <tr>
        <td>Pink</td>
        <td>Rosa </td>
        
        </tr>
          <tr>
        <td>Police</td>
        <td>Policia </td>
        </tr>
        <tr>
        <td>Gun</td>
        <td>Arma </td>
        </tr>
          <tr>
        <td>Teacher</td>
        <td>Maestro </td>
        </tr>
        </table>");
        
        
        ?>
    </body>
</html>
