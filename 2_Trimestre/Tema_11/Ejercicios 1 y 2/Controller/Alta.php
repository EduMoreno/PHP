<?php
require_once '../Model/Articulo.php';
require_once 'Twig/lib/Twig/Autoloader.php';

Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem(__DIR__.'/../View');
$twig = new Twig_Environment($loader);

if (isset($_POST["Alta"])) {
    
    $fecha = date('d-m-Y H:i');
    $articulo = new Articulo($_POST["tituloA"], $_POST["descripcionA"], $_POST["autorA"], $fecha, $_POST["categoriaA"]);
    
    $articulo->alta();
    
    header('Location: ../Controller/index.php');
    
} else {
      echo $twig->render('formAlta.html.twig');

}

