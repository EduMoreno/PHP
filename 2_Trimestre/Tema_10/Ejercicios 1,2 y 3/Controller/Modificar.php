<?php
require '../Model/Articulo.php';

if (isset($_POST["modificar"])) {
    
    $articulo = Articulo::getArticuloById($_POST["idM"]);
    
    $fecha = date('d-m-Y H:i');
    $articulo->setter($_POST["tituloM"], $_POST["articuloM"], $_POST["autorM"], $fecha, $_POST["categoriaM"]);
    $articulo->modificar();
    
    header('Location: ../Controller/index.php');
    
} else {

    include '../View/Menu.php';

    //Formulario
    include '../View/formModificar.php';
    
    //Pie de pagina
    include '../View/piedepagina.php';

}