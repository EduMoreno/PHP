<?php
require '../Model/Articulo.php';

if (isset($_POST["Alta"])) {
    
    $fecha = date('d-m-Y H:i');
    $articulo = new Articulo($_POST["tituloA"], $_POST["descripcionA"], $_POST["autorA"], $fecha, $_POST["categoriaA"]);
    
    $articulo->alta();
    
    header('Location: ../Controller/index.php');
    
} else {
    
    //Menú
    include '../View/Menu.php';

    //Formulario
    include '../View/formAlta.php';
    
    //Pie de pagina
    include '../View/piedepagina.php';

}

